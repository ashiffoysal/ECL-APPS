<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\ExamRequest;
use Carbon\Carbon;
use Auth;
use Image;
use Alert;
use Stripe;
use Mail;
use App\Mail\ExamBookingMail;
use App\Mail\ExamBookingDetailsForAdmin;
use App\Mail\ExamBooking;
use App\Models\User;
use App\Models\AatCategory;
use App\Models\Subcategory;
use PDF;

class ExambookingController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function exambooking(){
    	return view('frontend.exambooking.exam');
    }

    public function getsubject($type_id){
        $data=Subject::where('exam_board',$type_id)->where('is_deleted',0)->get();
        return response()->json($data);

    }
    public function subjectdetails($subject_id){
        $data=Subject::where('id',$subject_id)->first();
        return response()->json($data);
    }


    public function exambookingfuctionalskills(){
        $allsub=Subject::where('exam_type','Functional Skills')->where('is_deleted',0)->get();
        $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','Functional Skills')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.fuctionalskills',compact('allsub','maindata'));
    }


    public function exambookingfuctionalskillssubmit(Request $request){

        if($request->subject !=null){

           

         $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'photo_id'=>'',
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'main_exam_type'=>'Functional Skills',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,



        ]);

            $exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    $item['exam_date'] = $request->exam_date[$key];
                    $item['start_exam_time'] = $request->start_exam_time[$key];

                    array_push($exam_information, $item);
                    $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                 'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
                    }
                     
                     
                     
                if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id'.Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                } 

                 Mail::to($request->email)->send(new ExamBookingMail());
                 if ($insert) {
                   
                    $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                      $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
      

                    Alert::toast('Exam booking success!please pay now', 'success');
                    return redirect('/make-payment/exambooking/'.$request->booking_id);
                } else {
                    Alert::toast('Something Went Wrong', 'error');
                    return redirect()->back();
                }

        } else {
            Alert::toast('Please enter your subject', 'error');
            return redirect()->back();
        }

     
    }


    public function exambookingacca(){
        $allsub=Subject::where('exam_type','ACCA')->where('is_deleted',0)->get();
        $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','ACCA')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.accaexam',compact('allsub','maindata'));
    }


     public function accaexamsubmit(Request $request){

            if($request->subject !=null){ 

           
             $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'acca_registration_num'=>$request->acca_registration,
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'photo_id'=>'',
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'payment_option'=>$request->payment_option,
                'main_exam_type'=>'ACCA',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,


        ]);

            $exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    $item['exam_date'] = $request->exam_date[$key];
                    $item['start_exam_time'] = $request->start_exam_time[$key];
                    array_push($exam_information, $item);
                     $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                 'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
            }
          if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id_'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }


            Mail::to($request->email)->send(new ExamBookingMail());
            if ($insert) {
                 $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                    //  
                         $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                     
                Alert::toast('success', 'success');
                return redirect('/make-payment/exambooking/'.$request->booking_id);
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        }
        else {
            Alert::toast('Please Enter subject', 'error');
            return redirect()->back();
        }
        
    }


    public function exambookingatt(){

         $allsub=Subject::where('exam_type','AAT')->where('is_deleted',0)->get();
         $allaatcate=AatCategory::get();
         $allaatsubcate=Subcategory::get();

         $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','AAT')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.attexam',compact('allsub','maindata','allaatcate'));
    }

    public function exambookingattsubmit(Request $request){

        if($request->subject !=null){ 

          

             $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'acca_registration_num'=>$request->acca_registration,
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'photo_id'=>'',
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'payment_option'=>$request->payment_option,
                'main_exam_type'=>'AAT',
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,

        ]);

            $exam_information = array();

            if ($request->has('subject')) {
                $total_amount=0;
                foreach ($request->subject as $key => $no) {
                  
                    $item['exam_board'] = 'AAT';
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key] ?? '';

                    $item['subject'] = $request->subject[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    $item['exam_date'] = $request->exam_date[$key];
                    $item['start_exam_time'] = $request->start_exam_time[$key];
                    array_push($exam_information, $item);
                    $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                 'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
            }

      if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id_'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }

             Mail::to($request->email)->send(new ExamBookingMail());
            if ($insert) {
                    $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                    //  
                    
                         $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                    
                    
                    // 
                     
                     
                     
                     
                 Alert::toast('success', 'success');
                return redirect('/make-payment/exambooking/'.$request->booking_id);
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        }else{

            Alert::toast('Please Enter Subjects', 'error');
            return redirect()->back();
        }

    }

    public function exambookingmain(){
        $allsub=Subject::where('is_deleted',0)->get();
        return view('frontend.exambooking.allexam',compact('allsub'));
    }

    public function exambookinggcse(){
        $allsub=Subject::where('exam_type','GCSE')->where('exam_board','OCR')->where('is_deleted',0)->get();
        $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','GCSE')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.gcse',compact('allsub','maindata'));
    }


    public function makepayment($order_id){
        

        $data=ExamRequest::where('booking_id',$order_id)->first();
        return view('frontend.exambooking.makepayment',compact('data'));
    }


    public function exambookingstoregcse(Request $request){
      
            
            
       if ($request->subject !=null){   

           
                    $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                            'user_id'=>Auth::user()->id,
                            'booking_id'=>$request->booking_id,
                            'main_exam_type'=>$request->main_exam_type,
                            'first_name'=>$request->first_name,
                            'middle_name'=>$request->middle_name,
                            'last_name'=>$request->last_name,
                            'email'=>$request->email,
                            'phone'=>$request->phone,
                            'emergency_contact_number'=>$request->emergency_contact_number,
                            'address_line_1'=>$request->address_line_1,
                            'address_line_2'=>$request->address_line_2,
                            'city'=>$request->city,
                            'postcode'=>$request->postcode,
                            'date_of_birth'=>$request->date_of_birth,
                            'gender'=>$request->gender,
                            'uci'=>$request->uci,
                            'uci_number'=>$request->uci_number,
                            'uln'=>$request->uln,
                            'uln_number'=>$request->uln_number,
                            'total_amount'=>$request->total_amount,
                            'retaking_exams'=>$request->retaking_exams,
                            'retaking_exams_name'=>$request->retaking_exams_name,
                            'caring_forwad'=>$request->caring_forwad,
                            'caring_forwad_details'=>$request->caring_forwad_details,
                            'special_acces'=>$request->special_acces,
                            'special_acces_evidence'=>$request->special_acces_evidence,
                            'mental_conditions'=>$request->mental_conditions,
                            'mental_condition_details'=>$request->mental_condition_details,
                            'condition_disability'=>$request->condition_disability,
                            'condition_disability_details'=>$request->condition_disability_details,
                            'relationship'=>$request->relationship,
                            'relation_name'=>$request->relation_name,
                            'todays_date'=>$request->todays_date,
                            'created_at'=>Carbon::now()->toDateTimeString(),
                            'has_a_candidate'=>$request->has_a_candidate,
                            'has_a_candidate_number'=>$request->has_a_candidate_number,
                            'mock_test'=>$request->mock_test,
                            'marked_mocks'=>$request->marked_mocks,
                            'mock_test_paper_1'=>$request->mock_test_paper_1,
                            'mock_test_paper_2'=>$request->mock_test_paper_2,
                            'mock_test_paper_3'=>$request->mock_test_paper_3,
                            'mock_test_paper_4'=>$request->mock_test_paper_4,
                            'is_completed_from'=>1,
                            'status'=>1,
                        ]);

                        $exam_information = array();

                        if ($request->has('exam_board')) {
                            $total_amount=0;
                            foreach ($request->exam_board as $key => $no) {
                              
                                $item['exam_board'] = $request->exam_board[$key];
                                $item['exam_series'] = $request->exam_series[$key];
                                $item['type'] = $request->type[$key];
                                $item['subject'] = $request->subject[$key];
                                $item['unit_code'] = $request->unit_code[$key];
                                $item['option_code'] = $request->option_code[$key];
                                $item['fees'] = $request->fees[$key];
                                array_push($exam_information, $item);
                                $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                 'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
                        }

                    $photos = array();
                    if ($request->hasFile('photos')) {
            
                            foreach ($request->photos as $key => $photo) {
            
                                $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                                $resizedPhoto = Image::make($photo)->save('uploads/student/exambooking/'.$photoName);
                                array_push($photos, $photoName);
            
                            }
                  
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'carring_forward_image' => json_encode($photos),
                            ]);
                    }
                  
                    
                 
                
                 if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }
                
                
            if ($request->hasFile('evidence_documents')) {
                $extensionthree = $request->evidence_documents->getClientOriginalExtension();
                    if($extensionthree !='pdf'){
                    
                        $imaged = $request->file('evidence_documents');
                        $ImageNamed = 'special_evidents_documents' .Auth::user()->id. '_' . time() . '.' . $imaged->getClientOriginalExtension();
                        Image::make($imaged)->save('uploads/student/exambooking/' . $ImageNamed);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'special_evidents_documents' => 'uploads/student/exambooking/' . $ImageNamed,
                        ]);
                    }else{
                            $photoss =$request->file('evidence_documents');
                            $namess = 'special_evidents_documents'.Auth::user()->id.time().'.'.$photoss->getClientOriginalExtension();
                            $newfiless =$photoss->move(public_path().'/uploads/student/', $namess);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'special_evidents_documents' => 'uploads/student/'.$namess,
                            ]);
                    }
                }
                
                
                
                
                
                
                

                Mail::to($request->email)->send(new ExamBookingMail());
                if ($insert) {
                    $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                     
                          $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                     
                     
                     
                     
                        Alert::toast('success', 'success');
                        return redirect('/make-payment/exambooking/'.$request->booking_id);
                    } else {
                        Alert::toast('Something Went Wrong', 'error');
                        return redirect()->back();
                    }

        } else {
            Alert::toast('Please Enter your subject', 'error');
            return redirect()->back();
        }




    }
// a level
    public function exambookingalevel(){
        $allsub=Subject::where('exam_type','A Level')->where('exam_board','OCR')->where('is_deleted',0)->get();
         $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','A Level')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.alevel',compact('allsub','maindata'));
    }
    public function exambookingalevelstore(Request $request){

        if ($request->subject !=null){  
          
        $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'main_exam_type'=>$request->main_exam_type,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,

        ]);

            $exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['unit_code'] = $request->unit_code[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    array_push($exam_information, $item);
                    $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
            }
    
                    $photos = array();
                    if ($request->hasFile('photos')) {
            
                            foreach ($request->photos as $key => $photo) {
            
                                $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                                $resizedPhoto = Image::make($photo)->save('uploads/student/exambooking/'.$photoName);
                                array_push($photos, $photoName);
            
                            }
                  
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'carring_forward_image' => json_encode($photos),
                            ]);
                    }
                    
                    
                     if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }
                
                  if ($request->hasFile('evidence_documents')) {
                $extensionthree = $request->evidence_documents->getClientOriginalExtension();
                    if($extensionthree !='pdf'){
                    
                        $imaged = $request->file('evidence_documents');
                        $ImageNamed = 'special_evidents_documents' .Auth::user()->id. '_' . time() . '.' . $imaged->getClientOriginalExtension();
                        Image::make($imaged)->save('uploads/student/exambooking/' . $ImageNamed);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'special_evidents_documents' => 'uploads/student/exambooking/' . $ImageNamed,
                        ]);
                    }else{
                            $photoss =$request->file('evidence_documents');
                            $namess = 'special_evidents_documents'.Auth::user()->id.time().'.'.$photoss->getClientOriginalExtension();
                            $newfiless =$photoss->move(public_path().'/uploads/student/', $namess);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'special_evidents_documents' => 'uploads/student/'.$namess,
                            ]);
                    }
                }

      
         
            Mail::to($request->email)->send(new ExamBookingMail());
            if ($insert) {
                   $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                     
                          $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                     
                     
                     
                     
                Alert::toast('success', 'success');
                return redirect('/make-payment/exambooking/'.$request->booking_id);
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        }else{
             Alert::toast('Please Enter Subjects', 'error');
             return redirect()->back();
        }
    }
    
    
    
    public function exambookingaslevelStore(Request $request){
        
        if ($request->subject !=null){  
          
        $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'main_exam_type'=>$request->main_exam_type,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,

        ]);

            $exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['unit_code'] = $request->unit_code[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    array_push($exam_information, $item);
                    $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'paid_amount'=>0,
                                'total_amount'=>$total_amount,
                                'due_amount'=>$total_amount,
                            ]);
            }

    
      if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }   
                
                
                  if ($request->hasFile('evidence_documents')) {
                $extensionthree = $request->evidence_documents->getClientOriginalExtension();
                    if($extensionthree !='pdf'){
                    
                        $imaged = $request->file('evidence_documents');
                        $ImageNamed = 'special_evidents_documents' .Auth::user()->id. '_' . time() . '.' . $imaged->getClientOriginalExtension();
                        Image::make($imaged)->save('uploads/student/exambooking/' . $ImageNamed);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'special_evidents_documents' => 'uploads/student/exambooking/' . $ImageNamed,
                        ]);
                    }else{
                            $photoss =$request->file('evidence_documents');
                            $namess = 'special_evidents_documents'.Auth::user()->id.time().'.'.$photoss->getClientOriginalExtension();
                            $newfiless =$photoss->move(public_path().'/uploads/student/', $namess);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'special_evidents_documents' => 'uploads/student/'.$namess,
                            ]);
                    }
                }
            Mail::to($request->email)->send(new ExamBookingMail());
            if ($insert) {
                   $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                          $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                     
                     
                Alert::toast('success', 'success');
                return redirect('/make-payment/exambooking/'.$request->booking_id);
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        }else{
             Alert::toast('Please Enter Subjects', 'error');
             return redirect()->back();
        }
    }


    public function exambookingigcse(){

        $allsub=Subject::where('exam_type','IGCSE')->where('exam_board','Edexcel')->where('is_deleted',0)->get();
         $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','IGCSE')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.igcse',compact('allsub','maindata'));
    }
    public function exambookingigcsestore(Request $request){
        
         
         

       
        
         if ($request->subject !=null){ 
             
            $insert=ExamRequest::where('booking_id',$request->booking_id)->update([
                'user_id'=>Auth::user()->id,
                'booking_id'=>$request->booking_id,
                'main_exam_type'=>$request->main_exam_type,
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'city'=>$request->city,
                'postcode'=>$request->postcode,
                'date_of_birth'=>$request->date_of_birth,
                'gender'=>$request->gender,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'total_amount'=>$request->total_amount,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'created_at'=>Carbon::now()->toDateTimeString(),
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'mock_test'=>$request->mock_test,
                'marked_mocks'=>$request->marked_mocks,
                'mock_test_paper_1'=>$request->mock_test_paper_1,
                'mock_test_paper_2'=>$request->mock_test_paper_2,
                'mock_test_paper_3'=>$request->mock_test_paper_3,
                'mock_test_paper_4'=>$request->mock_test_paper_4,
                'is_completed_from'=>1,
                'status'=>1,

        ]);

            $exam_information = array();

            if ($request->has('exam_board')) {
                $total_amount=0;
                foreach ($request->exam_board as $key => $no) {
                  
                    $item['exam_board'] = $request->exam_board[$key];
                    $item['exam_series'] = $request->exam_series[$key];
                    $item['type'] = $request->type[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['unit_code'] = $request->unit_code[$key];
                    $item['option_code'] = $request->option_code[$key];
                    $item['fees'] = $request->fees[$key];
                    array_push($exam_information, $item);
                     $total_amount=$total_amount + $request->fees[$key];
                            }
                            $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'paid_amount'=>0,
                                'due_amount'=>$total_amount,
                            ]);
            }
            
            
         

      
                    
                    
             $photos = array();
            if ($request->hasFile('photos')) {
    
                    foreach ($request->photos as $key => $photo) {
    
                        $photoName = uniqid() . "." . $photo->getClientOriginalExtension();
                        $resizedPhoto = Image::make($photo)->save('uploads/student/exambooking/'.$photoName);
                        array_push($photos, $photoName);
    
                    }
          
                    ExamRequest::where('booking_id',$request->booking_id)->update([
                        'carring_forward_image' => json_encode($photos),
                    ]);
            }
 if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                ExamRequest::where('booking_id',$request->booking_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            ExamRequest::where('booking_id', $request->booking_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
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

                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            
                            'signed' => $file,
                        ]);
                      
                    }
                    
                    
                if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                    }
                }
                
                
                  if ($request->hasFile('evidence_documents')) {
                $extensionthree = $request->evidence_documents->getClientOriginalExtension();
                    if($extensionthree !='pdf'){
                    
                        $imaged = $request->file('evidence_documents');
                        $ImageNamed = 'special_evidents_documents' .Auth::user()->id. '_' . time() . '.' . $imaged->getClientOriginalExtension();
                        Image::make($imaged)->save('uploads/student/exambooking/' . $ImageNamed);
                        ExamRequest::where('booking_id',$request->booking_id)->update([
                            'special_evidents_documents' => 'uploads/student/exambooking/' . $ImageNamed,
                        ]);
                    }else{
                            $photoss =$request->file('evidence_documents');
                            $namess = 'special_evidents_documents'.Auth::user()->id.time().'.'.$photoss->getClientOriginalExtension();
                            $newfiless =$photoss->move(public_path().'/uploads/student/', $namess);
                            ExamRequest::where('booking_id',$request->booking_id)->update([
                                'special_evidents_documents' => 'uploads/student/'.$namess,
                            ]);
                    }
                }
      
        
      
         

               Mail::to($request->email)->send(new ExamBookingMail());
            if ($insert) {
                   $user=([
                         'name'=>$request->first_name,
                         'booking_id'=>$request->booking_id,
                    ]);
                   
                     $email="admin@merittutors.co.uk";
                     Mail::to($email)->send(new ExamBooking($user));
                     
                     
                          $data=ExamRequest::where('booking_id',$request->booking_id)->first();
                    $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                       Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("ECL Invoice")
                            ->attachData($pdf->output(), "Invoice.pdf");
                    });
                     
                     
                     
                Alert::toast('success', 'success');
                return redirect('/make-payment/exambooking/'.$request->booking_id);
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        } else {
            Alert::toast('Please Enter Subjects', 'error');
            return redirect()->back();
        }


       
    } 



    public function insertexambookingajax(Request $request){
        
       
          $check=ExamRequest::where('booking_id',$request->booking_id)->where('is_completed_from',0)->first();
          if($check){
                    $update=ExamRequest::where('booking_id',$request->booking_id)->update([
                        'user_id'=>Auth::user()->id,
                        'main_exam_type'=>$request->main_exam_type,
                        'first_name'=>$request->first_name,
                        'middle_name'=>$request->middle_name,
                        'last_name'=>$request->last_name,
                        'email'=>$request->email,
                        'phone'=>$request->phone,
                        'emergency_contact_number'=>$request->emergency_contact_number,
                        'address_line_1'=>$request->address_line_1,
                        'address_line_2'=>$request->address_line_2,
                        'city'=>$request->city,
                        'postcode'=>$request->postcode,
                        'date_of_birth'=>$request->date_of_birth,
                        'gender'=>$request->gender,
                        'uci'=>$request->uci,
                        'uci_number'=>$request->uci_number,
                        'uln'=>$request->uln,
                        'uln_number'=>$request->uln_number,
                        'type_of_learner'=>$request->type_of_learner,
                        'retaking_exams'=>$request->retaking_exams,
                        'retaking_exams_name'=>$request->retaking_exams_name,
                        'caring_forwad'=>$request->caring_forwad,
                        'caring_forwad_details'=>$request->caring_forwad_details,
                        'special_acces'=>$request->special_acces,
                        'special_acces_evidence'=>$request->special_acces_evidence,
                        'mental_conditions'=>$request->mental_conditions,
                        'mental_condition_details'=>$request->mental_condition_details,
                        'condition_disability'=>$request->condition_disability,
                        'condition_disability_details'=>$request->condition_disability_details,
                        'relationship'=>$request->relationship,
                        'relation_name'=>$request->relation_name,
                        'todays_date'=>$request->todays_date,
                        'created_at'=>Carbon::now()->toDateTimeString(),
                        'has_a_candidate'=>$request->candidatebefore,
                        'has_a_candidate_number'=>$request->has_a_candidate_number,
                    ]);
                    
                    
                     $userupdate=User::where('id',Auth::user()->id)->update([
                        
                        'emergency_contact_number'=>$request->emergency_contact_number,
                        'address_line_two'=>$request->address_line_2,
                        'city'=>$request->city,
                        'zip'=>$request->postcode,
                        'date_of_birth'=>$request->date_of_birth,
                        'name'=>$request->first_name,
                        'middle_name'=>$request->middle_name,
                        'last_name'=>$request->last_name,
                    ]);


            if($update){
                if($request->main_exam_type=='AAT'){
                     $kkkupdate=User::where('id',Auth::user()->id)->update([
                        'aat_number'=>$request->acca_registration,
                    ]);
                    if($kkkupdate){
                            return response("aat number ok");
                        }else{
                            return response("faildAA");
                        }
                }
                 if($request->main_exam_type=='ACCA'){
                     $kkskupdate=User::where('id',Auth::user()->id)->update([
                        'acca_number'=>$request->acca_registration,
                    ]);
                    if($kkskupdate){
                            return response("acca number ok");
                        }else{
                            return response("faildaca");
                        }
                }
                return response("ok");
            }else{
                return response("faild");
            }
          }else{
                  $insert=ExamRequest::insertGetId([
                        'user_id'=>Auth::user()->id,
                        'booking_id'=>$request->booking_id,
                        'main_exam_type'=>$request->main_exam_type,
                        'first_name'=>$request->first_name,
                        'middle_name'=>$request->middle_name,
                        'last_name'=>$request->last_name,
                        'email'=>$request->email,
                        'phone'=>$request->phone,
                        'emergency_contact_number'=>$request->emergency_contact_number,
                        'address_line_1'=>$request->address_line_1,
                        'address_line_2'=>$request->address_line_2,
                        'city'=>$request->city, 
                        'type_of_learner'=>$request->type_of_learner,
                        'postcode'=>$request->postcode,
                        'date_of_birth'=>$request->date_of_birth,
                        'gender'=>$request->gender,
                        'uci'=>$request->uci,
                        'uci_number'=>$request->uci_number,
                        'uln'=>$request->uln,
                        'uln_number'=>$request->uln_number,
                        'total_amount'=>$request->total_amount,
                        'retaking_exams'=>$request->retaking_exams,
                        'retaking_exams_name'=>$request->retaking_exams_name,
                        'caring_forwad'=>$request->caring_forwad,
                        'caring_forwad_details'=>$request->caring_forwad_details,
                        'special_acces'=>$request->special_acces,
                        'special_acces_evidence'=>$request->special_acces_evidence,
                        'mental_conditions'=>$request->mental_conditions,
                        'mental_condition_details'=>$request->mental_condition_details,
                        'condition_disability'=>$request->condition_disability,
                        'condition_disability_details'=>$request->condition_disability_details,
                        'relationship'=>$request->relationship,
                        'relation_name'=>$request->relation_name,
                        'todays_date'=>$request->todays_date,
                        'created_at'=>Carbon::now()->toDateTimeString(),
                        'has_a_candidate'=>$request->has_a_candidate,
                        'has_a_candidate_number'=>$request->has_a_candidate_number,
                    ]);
                    
                       $userupdate=User::where('id',Auth::user()->id)->update([
                        
                        'emergency_contact_number'=>$request->emergency_contact_number,
                        'address_line_two'=>$request->address_line_2,
                        'city'=>$request->city,
                        'zip'=>$request->postcode,
                        'date_of_birth'=>$request->date_of_birth,
                        'name'=>$request->first_name,
                        'middle_name'=>$request->middle_name,
                        'last_name'=>$request->last_name,
                    ]);

                if($insert){
                     if($request->main_exam_type=='AAT'){
                         
                         $kkkupdate=User::where('id',Auth::user()->id)->update([
                            'aat_number'=>$request->acca_registration,
                        ]);
                        
                      if($kkkupdate){
                            return response("aat number ok");
                        }else{
                            return response("faild");
                        }
                    }
                    if($request->main_exam_type=='ACCA'){
                     $kkskupdate=User::where('id',Auth::user()->id)->update([
                        'acca_number'=>$request->acca_registration,
                        ]);
                        if($kkskupdate){
                            return response("acca number ok");
                        }else{
                            return response("faild");
                        }
                     
                    }
                    return response("ok");
                }else{
                    return response("faild");
                }
          }
    }



    public function photouploads(Request $request){
            $image = $request->file('thumbnail_img');
            $ImageName = 'file' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
            ExamRequest::where('booking_id', $request->name)->update([
                'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
            ]);
            return response("ok");
    }


    public function exambookingaslevel(){
        $allsub=Subject::where('exam_type','AS Level')->where('exam_board','Edexcel')->where('is_deleted',0)->get();
         $maindata=ExamRequest::where('user_id',Auth::user()->id)->where('main_exam_type','AS Level')->where('is_completed_from',0)->first();
        return view('frontend.exambooking.aslevel',compact('allsub','maindata'));
      
    }

    



}
