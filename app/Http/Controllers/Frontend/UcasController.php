<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\UcasRequest;
use Image;
use Alert;
use App\Models\Wallet;
use App\Mail\BankPayment;
use App\Mail\UcasBooking;
use Mail;
use PDF;

class UcasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('frontend.ucas.applyform');
    }

    public function store(Request $request){
        $ucas_booking_id='ucas-'.Auth::user()->id.rand(1111,9999);
        $insert=UcasRequest::insertGetId([
            'user_id'=>Auth::user()->id, 
            'first_name'=>$request->first_name, 
            'middle_name'=>$request->middle_name,  
            'last_name'=>$request->last_name, 
            'phone'=>$request->phone,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'emergency_contact_number'=>$request->emergency_contact_number,
            'address_line_one'=>$request->address_line_one,
            'address_line_two'=>$request->address_line_two,
            'city'=>$request->city,
            'country'=>$request->country,
            'post_code'=>$request->post_code,
            'date_of_birth'=>$request->date_of_birth,
            'mock_exam_type'=>$request->exam_type,
            'review_personal_statement'=>$request->review_personal_statement,
            'application_support'=>$request->application_support,
            'payment_option'=>$request->payment_option,
            'ucas_booking_id'=>$ucas_booking_id,
            'created_at'=>Carbon::now()->todateTimeString(),
        ]);
        
        if($request->review_personal_statement=='yes'){
            UcasRequest::where('id',$insert)->update([
                'review_statement_amount'=>50,
            ]); 
        }
        
        if($request->application_support=='yes'){
            UcasRequest::where('id',$insert)->update([
                'doucment_check_amount'=>100,
            ]); 
        }
        
            $exam_information = array();
            if ($request->has('subject')) {
                $total_amount=0;
                foreach ($request->subject as $key => $no) {
                  
                    $item['subject'] = $request->subject[$key];
                    $item['paper'] = $request->paper[$key];
                    array_push($exam_information, $item);
                    $total_amount=$total_amount + 70;
                }
                
                $update=UcasRequest::where('id',$insert)->update([
                    'exam_subject_details'=>json_encode($exam_information),
                    'total_subject_amount'=>$total_amount,
                ]); 
                
            }
            
            
            // start
            $documents_information = array();
            if($request->hasFile('documents')){
                
                
                foreach ($request->documents as $key => $photo) {
                    
                    $name = time().rand(111,999).'.'.$photo->getClientOriginalExtension();
                    
                    $newfile =$photo->move(public_path().'/uploads/', $name);
                   
                    $itemyes['documents'] = $name;
                    
                    $itemyes['documents_details'] = $request->documents_details[$key];
                    
                    array_push($documents_information, $itemyes);
                   
                
                }
                $update=UcasRequest::where('id',$insert)->update([
                    'application_support_details'=>json_encode($documents_information),
                ]);
                
                
            }
            
            // end
            
            

           
                      
                
            
            // main end
            
            
            
             if ($request->hasFile('photo_id')) {
                $extension = $request->photo_id->getClientOriginalExtension();
                if($extension =='pdf'){
                              
                            $photos =$request->file('photo_id');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfile =$photos->move(public_path().'/uploads/student/', $name);
                            UcasRequest::where('id', $insert)->update([
                                'photo_id' => 'uploads/student/'.$name,
                            ]);
                            
                        }else{
                           
                            
                             $image = $request->file('photo_id');
                                $ImageName = 'photo_id' . '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                
                                UcasRequest::where('id',$insert)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                        }
                }

                    if ($request->signed) {
                           
                        $folderPath = "uploads/student/exambooking/";
                        $image_parts = explode(";base64,", $request['signed']); 
                        $image_type_aux = explode("image/", $image_parts[0]);
                        $image_type = $image_type_aux[1];
                        $image_base64 = base64_decode($image_parts[1]);
                        $file = $folderPath . uniqid() . '.'.$image_type;
                        file_put_contents($file, $image_base64);

                        UcasRequest::where('id',$insert)->update([
                            
                            'signature' => $file,
                        ]);
                      
                    }
                if ($request->hasFile('recent_photo')) {
                    $extensiontwo = $request->recent_photo->getClientOriginalExtension();
                        if($extensiontwo =='pdf'){
                        
                                $photoss =$request->file('recent_photo');
                                $name = 'recent_photo'.Auth::user()->id.time().'.'.$photoss->getClientOriginalExtension();
                                $newfile =$photoss->move(public_path().'/uploads/student/', $name);
                                UcasRequest::where('id', $insert)->update([
                                    'recent_photo' => 'uploads/student/'.$name,
                                ]);
                                
                            }else{
                                
                                 $image = $request->file('recent_photo');
                                $ImageName = 'recent_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                UcasRequest::where('id',$insert)->update([
                                    'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                            }
                    }
            if($insert){
                
                 Mail::to($request->email)->send(new UcasBooking());
                Alert::toast('success', 'success');
                return redirect('/make-payment/ucas-booking/'.$ucas_booking_id);
            }else{
                
                
                 return 'faild';
            }
        

    }
    
    public function payment($ucas_booking_id){
       $data=UcasRequest::where('ucas_booking_id',$ucas_booking_id)->first();
       return view('frontend.ucas.ucaspayment',compact('data'));
    }
    
    public function onlinepayment(Request $request){
       
       \Stripe\Stripe::setApiKey("sk_live_EX9sOuv5S6ZByV4n39iyOUus00ixEEbS1X");

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                    [
                        'price_data' => [
                            'currency'     => 'gbp',
                            'product_data' => [
                                'name' =>  "ECL Booking ID-".$request->booking_id,
                            ],
                            'unit_amount'  => $request->amount*100,
                            


                        ],
                        'quantity'   => 1,
                    ],
            ],
            'mode'        => 'payment',
            'success_url' => url('/myucasbooked/'.$request->booking_id.'/'.$request->amount.'/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url'  => route('ucas.checkout'),

        ]);

        return redirect()->away($session->url);
        
    }
    
       public function success(Request $request,$booking_id,$amount)
    {
       
       try {

                        $update=UcasRequest::where('ucas_booking_id',$request->booking_id)->update([
                            'is_paid'=>1,
                            'is_paid_verify'=>1,
                            'payment_option'=>'Card',
                            'transaction_id'=>$request->session_id,
                            'paid_amount'=>$amount,
                            
                        ]);
         
                        $insert=Wallet::insert([
                            'order_id'=>$booking_id,
                            'user_id'=>Auth::user()->id,
                            'amount_type'=>'Dabit',
                            'amount'=>$amount,
                            'paid_by'=>'Card',
                            'is_verified'=>1,
                            'transection_id'=>$request->session_id,
                            'date'=>Carbon::now(),
                            'created_at'=>Carbon::now()->toDateTimeString(),
                        ]);
                        
                        $data=UcasRequest::where('ucas_booking_id',$booking_id)->first();
                        $pdf = PDF::loadView('invoice.ucasinvoice',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                        'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                        
                        $datas["email"] = $data->email;
                        $datas["title"] = "Welcome to ECL";
                        $datas["body"] = "This is the email body.";
                        
                           Mail::send("mail.ucas_card_payment", $datas, function ($message) use ($datas, $pdf) {
                         
                             $message->to($datas["email"])
                                ->subject("ECL UCAS-Invoice")
                                ->attachData($pdf->output(), "Invoice.pdf");
                        });
              
                         Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
                        return redirect('/ucas-exam-booking-list');
                        


        } catch (Error $e) {
          http_response_code(500);
          echo json_encode(['error' => $e->getMessage()]);
        }
    }
    
    
    
    
    public function checkout(){
        return redirect()->back();
    }
    
      public function bankpayment(Request $request){
        
      $update=UcasRequest::where('ucas_booking_id',$request->booking_id)->update([
            'is_paid'=>1,
            'is_paid_verify'=>0,
            'payment_option'=>'Bank',
            'paid_amount'=>$request->amount,
            'transaction_id'=>$request->transection_id,
        ]);

        if ($request->hasFile('file')) {
             $extension = $request->file->getClientOriginalExtension();
                if($extension =='pdf'){
                    
                     $photo =$request->file('file');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/student/', $name);
                        UcasRequest::where('id', $request->id)->update([
                            'transection_image' => 'uploads/student/'.$name,
                        ]);
                    
                }else{
            
                    $image = $request->file('file');
                    $ImageName = 'file' . '_' . time() . '.' . $image->getClientOriginalExtension();
                    Image::make($image)->save('uploads/student/' . $ImageName);
                    UcasRequest::where('id', $request->id)->update([
                        'transection_image' => 'uploads/student/' . $ImageName,
                    ]);
                }
            
            
            
            
            
        }
      if($update){
             $insert=Wallet::insert([
                'order_id'=>$request->booking_id,
                'user_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'amount_type'=>'Dabit',
                'paid_by'=>'Bank Transfer',
                'transection_id'=>$request->transection_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            
                 $maindata=UcasRequest::where('ucas_booking_id',$request->booking_id)->first();
                 Mail::to($maindata->email)->send(new BankPayment());
                 
         Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
            return redirect('/ucas-exam-booking-list');
        }else{
            Session::flash('error', 'Something Went Wrong!Please try Again');
            return back();
        }
        
    }
}
