<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use App\Models\Wallet;
use App\Models\ExamRequest;
use App\Models\BeforeRequestTutor;
use App\Models\StudentTutorRequest;
use Carbon\Carbon;
use Session;
use Alert;
use Auth;
use Image;
use Mail;
use App\Mail\BankPayment;
use App\Mail\ExamBooking;
use App\Mail\PaymentInvoice;
use App\Mail\ExamBookingDetailsForAdmin;

class PaymentController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
        }
        
        
        
           public function session(Request $request)
    {
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
            'success_url' => url('/mybooked/'.$request->booking_id.'/'.$request->amount.'/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url'  => route('checkout'),

        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request,$booking_id,$amount)
    {
       
       try {

                        $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                            'is_paid'=>1,
                            'is_paid_verify'=>1,
                            'payment_option'=>'Card',
                            'transection_id'=>$request->session_id,
                            'paid_amount'=>$amount,
                            'due_amount'=>0,
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
                        
                          $email="admin@merittutors.co.uk";
                         $maindata=ExamRequest::where('booking_id',$booking_id)->first();
                         Mail::to($email)->send(new ExamBookingDetailsForAdmin($maindata));
                         Mail::to($maindata->email)->send(new PaymentInvoice($maindata));
                         Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
                        return redirect('/exam-booking-list');
                        


        } catch (Error $e) {
          http_response_code(500);
          echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function checkout(){
        return redirect('/exam-booking-list');
    }


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     public function onlinepayment(Request $request)
    {
        
                 
                Stripe\Stripe::setApiKey("sk_live_EX9sOuv5S6ZByV4n39iyOUus00ixEEbS1X");

                try {
                    $paymet=Stripe\Charge::create ([
                            "amount" => $request->amount*100,
                            "currency" => "GBP",
                            "source" => $request->stripeToken,
                            "description" => "ECL Booking ID-".$request->booking_id,
                    ]);
                    if($paymet){
                        $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                            'is_paid'=>1,
                            'is_paid_verify'=>1,
                            'payment_option'=>'Card',
                            'transection_id'=>$paymet->id,
                            'paid_amount'=>$request->amount,
                            'due_amount'=>0,
                        ]);
                        $insert=Wallet::insert([

                            'order_id'=>$request->booking_id,
                            'user_id'=>Auth::user()->id,
                            'amount'=>$request->amount,
                            'amount_type'=>'Dabit',
                            'paid_by'=>'Card',
                            'is_verified'=>1,
                            'transection_id'=>$paymet->id,
                            'date'=>Carbon::now(),
                            'created_at'=>Carbon::now()->toDateTimeString(),

                        ]);
                        $email="admin@merittutors.co.uk";
                         $maindata=ExamRequest::where('booking_id',$request->booking_id)->first();
                         Mail::to($email)->send(new ExamBookingDetailsForAdmin($maindata));
                         Mail::to($maindata->email)->send(new PaymentInvoice($maindata));
                         Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
                        return redirect('/exam-booking-list');
                    }else{
                        Session::flash('error', 'Something Went Wrong!Please try Again');
                        return back();
                    }
               
            } 
             catch(\Stripe\Exception\CardException $e) {
                 Alert::toast('Card Is not Supported','error');
                return redirect()->back();
            } catch (\Stripe\Exception\RateLimitException $e) {
              // Too many requests made to the API too quickly
                Alert::toast('Please Try Again','error');
                return redirect()->back();
            } catch (\Stripe\Exception\InvalidRequestException $e) {
              // Invalid parameters were supplied to Stripe's API
                Alert::toast('Card Is Invalid','error');
                return redirect()->back();
            } catch (\Stripe\Exception\AuthenticationException $e) {
              // Authentication with Stripe's API failed
              // (maybe you changed API keys recently)
            Alert::toast('Stripe failed! Try Again','error');
                return redirect()->back();
            } catch (\Stripe\Exception\ApiConnectionException $e) {
              // Network communication with Stripe failed
                Alert::toast('Stripe failed! Try Again','error');
                return redirect()->back();
            } catch (\Stripe\Exception\ApiErrorException $e) {
              // Display a very generic error to the user, and maybe send
              // yourself an email
                Alert::toast('Email Not Found','error');
                return redirect()->back();
            } catch (Exception $e) {
                  Alert::toast('completely unrelated to Stripe!Try Again','error');
                return redirect()->back();
              // Something else happened, completely unrelated to Stripe
            }
        

        
        
       
    }






    public function bankpayment(Request $request){
       
   
      $update=ExamRequest::where('booking_id',$request->booking_id)->update([
            'is_paid'=>1,
            'is_paid_verify'=>0,
            'payment_option'=>'Bank',
            'paid_amount'=>$request->amount,
            'due_amount'=>0,
            'transection_id'=>$request->transection_id,
        ]);

        if ($request->hasFile('file')) {
             $extension = $request->file->getClientOriginalExtension();
                if($extension =='pdf'){
                    
                     $photo =$request->file('file');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/student/', $name);
                        ExamRequest::where('id', $request->id)->update([
                            'transection_image' => 'uploads/student/'.$name,
                        ]);
                    
                }else{
            
                    $image = $request->file('file');
                    $ImageName = 'file' . '_' . time() . '.' . $image->getClientOriginalExtension();
                    Image::make($image)->save('uploads/student/' . $ImageName);
                    ExamRequest::where('id', $request->id)->update([
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
            
                 $maindata=ExamRequest::where('booking_id',$request->booking_id)->first();
                 Mail::to($maindata->email)->send(new BankPayment());
                 
         Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
            return redirect('/exam-booking-list');
        }else{
            Session::flash('error', 'Something Went Wrong!Please try Again');
            return back();
        }
    }

  



}
