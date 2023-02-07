<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UcasRequest;
use Carbon\Carbon;
use Auth;
use App\Models\Wallet;
use PDF;


class UcasManageController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $alldata=UcasRequest::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.ucas.index',compact('alldata'));
    }
    
     public function details($id){
        $data=UcasRequest::where('id',$id)->first();
         $update=UcasRequest::where('id',$id)->update([
                'is_seen'=>1,
             ]);
        
        return view('backend.ucas.details',compact('data'));
    }
    
        public function basicInformationupdate(Request $request){

            $update=UcasRequest::where('id',$request->id)->update([
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'city'=>$request->city,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address_line_one'=>$request->address_line_one,
                'address_line_two'=>$request->address_line_two,
                'date_of_birth'=>$request->date_of_birth,
                'post_code'=>$request->post_code,
                'gender'=>$request->gender,
                'emergency_contact_number'=>$request->emergency_contact_number,
                
            ]);
              if($update){
                return response("Update success");
            }else{
                return response("Update Faild");
            }

    }
    
    public function paymentUpdate(Request $request){
              $validated = $request->validate([
                'paid_amount' => 'required',
            ]);
            $check=UcasRequest::where('ucas_booking_id',$request->booking_id)->select(['paid_amount','id','ucas_booking_id','user_id'])->first();
            
            if($check){

                $paid_amount=$check->paid_amount;

                $Walletinsert=Wallet::insert([
                    'order_id'=>$request->booking_id,
                    'user_id'=>$check->user_id,
                    'amount'=>$request->paid_amount,
                    'amount_type'=>'Dabit',
                    'paid_by'=>$request->paid_by,
                    'is_verified'=>1,
                    'transection_id'=>$request->transaction_id,
                    'date'=>Carbon::now(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                $update=UcasRequest::where('ucas_booking_id',$request->booking_id)->update([

                    'paid_amount'=>$paid_amount + $request->paid_amount,
                    'is_paid'=>1,
                    'is_paid_verify'=>1,
                    'payment_option'=>$request->paid_by,
                    'transaction_id'=>$request->transaction_id,
                    
                ]);
                if($update){
                  
                 $maindata=UcasRequest::where('ucas_booking_id',$request->booking_id)->first();
                            $notification = array(
                                'messege' => 'Confirmation send success!',
                                'alert-type' => 'success'
                            );
                            
                            
                            return redirect()->back()->with($notification);
                    }else{
                        $notification = array(
                            'messege' => 'Confirmation send success!',
                            'alert-type' => 'success'
                        );
                        
                        
                        return redirect()->back()->with($notification);
                        
                        
                    }



            }
    }
    
    public function delete($id){
        $delete=UcasRequest::where('id',$id)->update([
            'is_deleted'=>1,    
        ]);
         if($delete){
                   $notification = array(
                                'messege' => 'Delete  success!',
                                'alert-type' => 'success'
                            );
                            
                            
                            return redirect()->back()->with($notification);
                    }else{
                        $notification = array(
                            'messege' => 'Delete Faild!',
                            'alert-type' => 'error'
                        );
                        
                        return redirect()->back()->with($notification);
                        
                        
                    }
    }
    
    
    public function updateapaymentstatus(Request $request){
       
          $update=UcasRequest::where('id',$request->id)->update([
                'is_paid_verify'=>$request->paid_status,
                'notes'=>$request->notes,
            ]);
            if($update){
                if($request->paid_status==1){
                    
                  UcasRequest::where('id',$request->id)->update([
                           
                            'is_paid'=>1,
                           
                        ]);
                     
                }
                return response("Update success");
            }else{
                return response("Update Faild");
            }
    }
    
    public function exportucas($id){
        // $data=UcasRequest::where('id',$id)->first();
        // return view('backend.ucas.export',compact('data'));
        
        
         $data=UcasRequest::where('id', $id)->first();
        $pdf = PDF::loadView('invoice.ucasinvoice',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
        
        return $pdf->stream();
        return $pdf->download('ucasexambooking.pdf');
        
        
        
        
    }
    public function confirmexam($id){
        return "ok";
    }
}
