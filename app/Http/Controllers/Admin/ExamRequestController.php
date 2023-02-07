<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamRequest;
use App\Models\Subject;
use App\Models\Wallet;
use App\Models\User;
use App\Models\GcseExamConfirmation;
use App\Models\CandidateConfirmation;
use App\Models\StatementsOfEntry;
use Auth;
use Session;
use App\Mail\ExamBookingApproveMail;
use App\Mail\PaymentInvoice;
use App\Mail\FunctionalSkillMail;
use App\Mail\PaymentApprove;
use App\Mail\CandidateExamConfirmation;
use App\Mail\CandidateExam;
use Mail;
use PDF;
use Carbon\Carbon;

class ExamRequestController extends Controller
{    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function allexambooking(){
    	
    	$alldata=ExamRequest::orderBy('id','DESC')->where('is_completed_from',1)->where('is_deleted',1)->get();
        $allsub=Subject::get();
        return view('backend.examrequest.allexambooking',compact('alldata','allsub'));
    }

     public function gcsemain(){
        
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','GCSE')->where('is_completed_from',1)->where('is_deleted',1)->get();
        $allsub=Subject::get();
        return view('backend.examrequest.gcse',compact('alldata','allsub'));
    }


    public function aLevel(){
       
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','A Level')->where('is_completed_from',1)->where('is_deleted',1)->get();
        return view('backend.examrequest.alevel',compact('alldata'));
    }

    public function igcse(){
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','IGCSE')->where('is_deleted',1)->where('is_completed_from',1)->get();
        return view('backend.examrequest.igcse',compact('alldata'));
    }

    public function aat(){
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','AAT')->where('is_deleted',1)->where('is_completed_from',1)->get();
        return view('backend.examrequest.aatexam',compact('alldata'));
    }

    public function acca(){
        
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','ACCA')->where('is_deleted',1)->where('is_completed_from',1)->get();
        return view('backend.examrequest.acca',compact('alldata'));
    }
     public function functionalskill(){
        $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','Functional Skills')->where('is_deleted',1)->where('is_completed_from',1)->get();
        return view('backend.examrequest.functionalskills',compact('alldata'));
    }




    public function bookingdetails($id){
    	$data=ExamRequest::where('id',$id)->first();
    
        return view('backend.examrequest.examdetails',compact('data'));
    }
    public function mainbookingdetails($id){
        $data=ExamRequest::where('id',$id)->first();
        	$update=ExamRequest::where('id',$id)->update([
    	    'is_seen'=>1,
    	 ]);
       

        return view('backend.examrequest.maindetails',compact('data'));
    }

    public function mainbookingapprove($id){
         $user=ExamRequest::where('id',$id)->first();
         $data=ExamRequest::where('id',$id)->update([
            'status'=>1,
         ]);
         
          if ($data){

            Mail::to($user->email)->send(new ExamBookingApproveMail($user));
            $notification = array(
                'messege' => 'approve success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else {
            $notification = array(
                'messege' => 'approve Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

     public function mainbookingreject($id){

         $data=ExamRequest::where('id',$id)->update([
            'status'=>1,
         ]);
        if ($data) {
            $notification = array(
                'messege' => 'Reject success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Reject Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }


    // 
    public function insertCandidateNumbers(Request $request){
       
       $check=ExamRequest::where('Candidate_number',$request->main_candidate_number)->first();

        if($check){

        return response("Already used this Candidate Number");
        }else{

            $update=ExamRequest::where('id',$request->id)->update([
                'Candidate_number'=>$request->main_candidate_number,
            ]);
            if($update){
                return response("candidate number insert success");
            }else{
                return response("candidate number insert Faild");
            }
        }
    }


    public function basicInformationupdate(Request $request){

            $update=ExamRequest::where('id',$request->id)->update([
                'first_name'=>$request->first_name,
                'middle_name'=>$request->middle_name,
                'last_name'=>$request->last_name,
                'city'=>$request->city,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address_line_1'=>$request->address_line_1,
                'address_line_2'=>$request->address_line_2,
                'date_of_birth'=>$request->date_of_birth,
                'postcode'=>$request->postcode,
                'emergency_contact_number'=>$request->emergency_contact_number,
                'updated_by'=>Auth::user()->id,
            ]);
              if($update){
                return response("Update success");
            }else{
                return response("Update Faild");
            }

    }


    public function other_formation_update(Request $request){

               $update=ExamRequest::where('id',$request->id)->update([
                'has_a_candidate'=>$request->has_a_candidate,
                'has_a_candidate_number'=>$request->has_a_candidate_number,
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'type_of_learner'=>$request->type_of_learner,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'updated_by'=>Auth::user()->id,
            ]);
              if($update){
                return response("Update success");
            }else{
                return response("Update Faild");
            }
    }


    public function special_arrangements_update(Request $request){

         $update=ExamRequest::where('id',$request->id)->update([
                'special_acces'=>$request->special_acces,
                'special_acces_evidence'=>$request->special_acces_evidence,
                'mental_conditions'=>$request->mental_conditions,
                'mental_condition_details'=>$request->mental_condition_details,
                'condition_disability'=>$request->condition_disability,
                'condition_disability_details'=>$request->condition_disability_details,
                'updated_by'=>Auth::user()->id,
            ]);
              if($update){
                return response("Update success");
            }else{
                return response("Update Faild");
            }
    }


    public function terms_and_conditon_update(Request $request){

        $update=ExamRequest::where('id',$request->id)->update([
                'relationship'=>$request->relationship,
                'relation_name'=>$request->relation_name,
                'todays_date'=>$request->todays_date,
                'updated_by'=>Auth::user()->id,
            ]);
              if($update){
                return response("Update success");
            }else{
                return response("Update Faild");
            }

    }

    public function paid_status_update(Request $request){

         $update=ExamRequest::where('id',$request->id)->update([
                'id'=>$request->id,
                'is_paid_verify'=>$request->paid_status,
                'updated_by'=>Auth::user()->id,
            ]);
            if($update){
                 
                return response("Payment Status Update success");
            }else{
                return response("Update Faild");
            }

    }

    public function getupdatesubject(Request $request){
            $id=$request->id;
            $check=ExamRequest::where('id',$id)->first();
            $exam_type=$check->main_exam_type;

            if($exam_type=='GCSE'){

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
                            $update=ExamRequest::where('id',$id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,
                            ]);
                            if($update){
                                Session::flash('success','success');
                                return redirect()->back();
                            }else{
                                Session::flash('errors','errors');
                                return redirect()->back();
                            }
                        }


            }

            if($exam_type=='A Level'){
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
                             $update=ExamRequest::where('id',$id)->update([
                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,
                            ]);
                            if($update){
                                Session::flash('success','success');
                                return redirect()->back();
                            }else{
                                Session::flash('errors','errors');
                                return redirect()->back();
                            }
                        }
            }
                if($exam_type=='IGCSE'){
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
                             $update=ExamRequest::where('id',$id)->update([

                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,

                            ]);
                            if($update){
                                Session::flash('success','success');
                                return redirect()->back();
                            }else{
                                Session::flash('errors','errors');
                                return redirect()->back();
                            }
                        }
            }


           if($exam_type=='Functional Skills'){


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
                        $total_amount=$total_amount + $request->fees[$key];
                        array_push($exam_information, $item);
                        
                    }
                       $update=ExamRequest::where('id',$id)->update([

                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,

                            ]);
                     if($update){
                        Session::flash('success','success');
                        return redirect()->back();
                    }else{
                        Session::flash('errors','errors');
                        return redirect()->back();
                    }

                }

           }

             if($exam_type=='ACCA'){


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
                       $update=ExamRequest::where('id',$id)->update([

                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,

                            ]);
                     if($update){
                        Session::flash('success','success');
                        return redirect()->back();
                    }else{
                        Session::flash('errors','errors');
                        return redirect()->back();
                    }
                }

           }



         if($exam_type=='AAT'){

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
                   $update=ExamRequest::where('id',$id)->update([

                                'exam_information'=>json_encode($exam_information),
                                'total_amount'=>$total_amount,
                                'is_due'=>1,
                                'due_amount'=>$total_amount - $check->paid_amount,

                            ]);
                     if($update){
                        Session::flash('success','success');
                        return redirect()->back();
                    }else{
                        Session::flash('errors','errors');
                        return redirect()->back();
                    }
            }



            

         }
    }

    public function updatedateexmabooking(Request $request){
        
        
        
        
        
                    $user=([
                         'name'=>"asif",
                         'booking_id'=>837,
                    ]);
                   
                  
                     
                      $data=ExamRequest::where('id','837')->first();
                     
                      
                    $pdf = PDF::loadView('invoice.candidateexamconfirmation',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    $datas["email"] = $data->email;
                    $datas["title"] = "Welcome to ECL";
                    $datas["body"] = "This is the email body.";
                    
                     Mail::send("mail.gcseexambookingconfirm", $datas, function ($message) use ($datas, $pdf) {
                     
                         $message->to($datas["email"])
                            ->subject("Candidate Exam Booking Information")
                            ->attachData($pdf->output(), "STATEMENT_OF_ENTRY.pdf")
                            ->attach("uploads/exambookingconfirmation/IFC-Written_Examinations_2022_FINAL.pdf");
                            
                    });
                    
                    
        
             return "Update succes";
                

        //   $update=ExamRequest::where('id',$request->id)->update([
        //         'exambookingbyadmin_date'=>$request->bookingsubmitdate,
        //         'is_confirm_booking'=>1,
        //         'updated_by'=>Auth::user()->id,
        //     ]);
        //     if($update){
               
                
            //     return "Update succes";
            // }else{
            //      return "Update faild";
            // }

    }

    public function updateapaymentstatus(Request $request){

         $update=ExamRequest::where('id',$request->id)->update([
                'is_paid_verify'=>$request->paid_status,
                'notes'=>$request->notes,
                'updated_by'=>Auth::user()->id,
            ]);
            if($update){
                if($request->paid_status==1){
                    
                  ExamRequest::where('id',$request->id)->update([
                           
                            'is_paid'=>1,
                           
                        ]);
                    $maindata=ExamRequest::where('id',$request->id)->first();
                    Mail::to($maindata->email)->send(new PaymentApprove());
                     Mail::to($maindata->email)->send(new PaymentInvoice($maindata));
                     
                     $data=ExamRequest::where('id',$request->id)->first();
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
                     
                     
                }
                return response("Update success");
            }else{
                return response("Update Faild");
            }

    }


    public function mainpaymentupdate(Request $request){

            $validated = $request->validate([
                'paid_amount' => 'required',
            ]);
            $check=ExamRequest::where('booking_id',$request->booking_id)->select(['paid_amount','due_amount','id','booking_id','user_id'])->first();
            if($check){

                $paid_amount=$check->paid_amount;
                $due_amount=$check->due_amount;


                $Walletinsert=Wallet::insert([
                    'order_id'=>$request->booking_id,
                    'user_id'=>$check->user_id,
                    'amount'=>$request->paid_amount,
                    'amount_type'=>'Dabit',
                    'paid_by'=>$request->paid_by,
                    'is_verified'=>1,
                    'transection_id'=>$request->transection_id,
                    'date'=>Carbon::now(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                $update=ExamRequest::where('booking_id',$request->booking_id)->update([

                    'paid_amount'=>$paid_amount + $request->paid_amount,
                    'due_amount'=>$due_amount - $request->paid_amount,
                    'is_paid'=>1,
                    'is_paid_verify'=>1,
                    'payment_option'=>$request->paid_by,
                    'transection_id'=>$request->transection_id,
                    
                ]);
                if($update){
                  
                 $maindata=ExamRequest::where('booking_id',$request->booking_id)->first();
                 Mail::to($maindata->email)->send(new PaymentInvoice($maindata));
                        Session::flash('success','success');
                        return redirect()->back();
                    }else{
                        Session::flash('errors','errors');
                        return redirect()->back();
                    }



            }
    }
    
    
    public function candidateconfirmExam($id){
           $data=ExamRequest::where('id',$id)->first();
           return view('backend.examrequest.confirmexambooking',compact('data'));
    }
    
    public function candidateconfirmExamStore(Request $request){
      
       $insert=CandidateConfirmation::insert([
            'candidate_id'=>$request->candidate_id,
            'booking_id'=>$request->booking_id,
            'exam_id'=>$request->exam_id,
            'subject'=>$request->subject,
            'exam_type'=>$request->exam_type,
            'exam_date'=>$request->exam_date,
            'exam_time'=>$request->exam_time,
            'exam_branch'=>$request->exam_branch,
            'details'=>$request->details,
            'requirments'=>$request->requirments,
            'rescheduling'=>$request->rescheduling,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
         if ($insert) {
                ExamRequest::where('booking_id',$request->booking_id)->update([
                    'is_confirm_booking'=>1,
                ]);
             
             $user=([
                'candidate_id'=>$request->candidate_id,
                'booking_id'=>$request->booking_id,
                'exam_id'=>$request->exam_id,
                'exam_type'=>$request->exam_type,
                'subject'=>$request->subject,
                'exam_date'=>$request->exam_date,
                'exam_time'=>$request->exam_time,
                'exam_branch'=>$request->exam_branch,
                'details'=>$request->details,
                'requirments'=>$request->requirments,
                'rescheduling'=>$request->rescheduling,
                ]);
            
            Mail::to($request->email)->send(new CandidateExamConfirmation($user));
            Mail::to("ashiffoysal8818@gmail.com")->send(new CandidateExamConfirmation($user));
            if($request->exam_type=='Functional Skills'){
                Mail::to($request->email)->send(new FunctionalSkillMail());
            }
            $notification = array(
                'messege' => 'Confirmation send success!',
                'alert-type' => 'success'
            );
            
            
            return redirect()->back()->with($notification);
            
            
            
            
        } else {
            $notification = array(
                'messege' => 'Confirmation send Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    public function notesUpdate(Request $request){
        $update=User::where('id',$request->id)->update([
            'notes'=>$request->val,
            
        ]);
        if($update){
            return response('success');
        }else{
             return response('faild');
        }
    }
    
    public function examBookingDetailsExport($booking_id){
          $data=ExamRequest::where('booking_id',$booking_id)->first();
        $update=ExamRequest::where('booking_id',$booking_id)->update([
    	    'is_seen'=>1,
    	 ]);
        return view('backend.examrequest.fullexportexam',compact('data'));
    }
    
    public function deleteexambooking($id){
          $update=ExamRequest::where('id',$id)->update([
            'is_deleted'=>0,
            
        ]);
            if ($update) {
            $notification = array(
                'messege' => 'Delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    public function insernotesupdate(Request $request){
        $update=ExamRequest::where('id',$request->id)->update([
            'notes'=>$request->val,
        ]);
           if($update){
            return response('success');
        }else{
             return response('faild');
        }
        
        
    }
    
    public function forcheck(){
        $alldata=ExamRequest::where('booking_id','42559')->get();
        return view('backend.forcheck.index',compact('alldata'));
        }
        
        
        public function examconfirmlistGcse(){
            
          
            
             $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','GCSE')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.gcse',compact('alldata'));
        
        }
         public function examconfirmlistigcse(){
             $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','IGCSE')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.igcse',compact('alldata'));
        }
         public function examconfirmlistalevels(){
            $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','A Level')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.alevel',compact('alldata'));
        }
         public function examconfirmlistfunctionalskills(){
             
             $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','Functional Skills')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.functionalskills',compact('alldata'));
              
        }
         public function examconfirmlistaat(){
            $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','AAT')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.aat',compact('alldata'));
        }
         public function examconfirmlistacca(){
             
            $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','ACCA')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.acca',compact('alldata'));
              
        }
         public function examconfirmlistaslevels(){
             
           $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','AS Level')->where('is_completed_from',1)->where('is_deleted',1)->where('is_confirm_booking',1)->get();
             
              return view('backend.confirmexambooking.aslevels',compact('alldata'));
              
        }
        
    public function aslevelsexambooking(){
             
           $alldata=ExamRequest::orderBy('id','DESC')->where('main_exam_type','AS Level')->where('is_completed_from',1)->where('is_deleted',1)->get();
             
              return view('backend.examrequest.aslevels',compact('alldata'));
              
        }
        
        public function gcseIgcseAlevelExamconfirmation($id){
            $data=ExamRequest::where('id',$id)->first();
            return view('backend.examrequest.gcseexambookingconfirm',compact('data'));
        }
        
        public function gcseIgcseAlevelExamconfirmationStore(Request $request){
            
           $insert=GcseExamConfirmation::insertGetId([
               'exam_id'=>$request->exam_id,
               'booking_id'=>$request->booking_id,
               'candidate_id'=>$request->candidate_id,
               'exam_series'=>$request->exam_series,
               'exam_subject'=>$request->subject,
               'exam_board'=>$request->exam_board,
               'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            
            
               $exam_information = array();

            if ($request->has('syllabus')) {
                foreach ($request->syllabus as $key => $no) {
                    $item['syllabus'] = $request->syllabus[$key];
                    $item['paper_title'] = $request->paper_title[$key];
                    $item['exam_date'] = $request->exam_date[$key] ?? "";
                    $item['exam_time'] = $request->exam_time[$key] ?? "";
                    array_push($exam_information, $item);
                   
                }
                   $update=GcseExamConfirmation::where('id',$insert)->update([
                    'exam_details'=>json_encode($exam_information),
                   ]);
                  
            }
            
             if ($insert) {
                $notification = array(
                    'messege' => 'Add success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Add Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
            
            
            
        }
        
        public function gcseIgcseAlevelDeleteOneItem($id){
            $delete=GcseExamConfirmation::where('id',$id)->update([
                'is_deleted'=>1, 
            ]);
            if ($delete) {
                $notification = array(
                    'messege' => 'Delete success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Delete Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }
        
        public function gcseIgcseAlevelTestingStatements($id){
                    $data=ExamRequest::where('id',$id)->first();
                    $user=([
                         'name'=>$data->first_name.''.$data->last_name,
                         'booking_id'=>$data->booking_id,
                    ]);
                   
                  
                     
                     
                     
                      
                    $pdf = PDF::loadView('invoice.candidateexamconfirmation',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                    
                    return $pdf->stream();
                    
                    // $datas["email"] = $data->email;
                    // $datas["title"] = "Welcome to ECL";
                    // $datas["body"] = "This is the email body.";
                    
                    //  Mail::send("mail.gcseexambookingconfirm", $datas, function ($message) use ($datas, $pdf) {
                     
                    //      $message->to($datas["email"])
                    //         ->subject("Candidate Exam Booking Information")
                    //         ->attachData($pdf->output(), "STATEMENT_OF_ENTRY.pdf")
                    //         ->attach("uploads/exambookingconfirmation/IFC-Written_Examinations_2022_FINAL.pdf");
                            
                    // });
        }
        
        public function gcseIgcseAlevelFileUploads(Request $request){
           
            $insert=StatementsOfEntry::insertGetId([
                'booking_id'=>$request->booking_id,
                'candidate_email'=>$request->email,
                'exam_id'=>$request->exam_id,
                'candidate_id'=>$request->candidate_id,
                'exam_board_name'=>$request->name_of_board,
                'uploads_by'=>Auth::user()->id,
                'uploads_date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            
             if ($request->hasFile('file')) {
             $extension = $request->file->getClientOriginalExtension();
                if($extension =='pdf'){
                    
                     $photo =$request->file('file');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/statementsofentries/', $name);
                        StatementsOfEntry::where('id',$insert)->update([
                            'file' => 'uploads/statementsofentries/'.$name,
                        ]);
                    
                }
            }
            
            if ($insert) {
                $notification = array(
                    'messege' => 'Upload success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Upload Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
            
            
        }
        
        
        public function gcseIgcseAlevelFileUploadsDelete($id){
            $delete=StatementsOfEntry::where('id',$id)->delete();
              if ($delete) {
                $notification = array(
                    'messege' => 'Delete success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Delete Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }
        
        public function gcseIgcseAlevelSendExamEntry($id){
            
            
            
            
                    $data=ExamRequest::where('id',$id)->first();
                    
                    if($data->uci_number !=null){
                        
                        if($data->Candidate_number !=null){
                             $update=ExamRequest::where('id',$id)->update([
                                'is_confirm_booking'=>1,
                            ]);
                            $user=([
                                 'name'=>$data->first_name,
                                 'booking_id'=>$data->booking_id,
                            ]);
                              
                            $pdf = PDF::loadView('invoice.candidateexamconfirmation',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
                            'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
                            
                           
                            
                            $datas["email"] = $data->email;
                            $datas["title"] = "Welcome to ECL";
                            $datas["body"] = "This is the email body.";
                            
                             Mail::send("mail.gcseexambookingconfirm", $datas, function ($message) use ($datas, $pdf) {
                             
                                 $message->to($datas["email"])
                                    ->subject("CANDIDATE EXAM STATEMENT OF ENTRY")
                                    ->attachData($pdf->output(), "STATEMENT_OF_ENTRY.pdf")
                                    ->attach("uploads/exambookingconfirmation/IFC-Written_Examinations_2022_FINAL.pdf");
                                    
                            });
                            
                          $notification = array(
                            'messege' => 'Confirmation Send success!',
                            'alert-type' => 'success'
                        );
                        return redirect()->back()->with($notification);
                        }else{
                            $notification = array(
                            'messege' => 'Please entry Candidate number!',
                            'alert-type' => 'error'
                        );
                        return redirect()->back()->with($notification);
                        }
                        
                           
                        
                    }else{
                        $notification = array(
                            'messege' => 'Please entry UCI number!',
                            'alert-type' => 'error'
                        );
                        return redirect()->back()->with($notification);
                    }
                    
        }
        
        public function sendDuePaymemt($id){
            return $id;
        }

}
