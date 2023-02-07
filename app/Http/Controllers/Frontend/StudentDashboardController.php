<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Wallet;
use App\Models\SaveTutor;
use App\Models\TutoringSubject;
use App\Models\TutorComplatelesson;
use App\Models\StudentTutorRequest;
use App\Models\Studentfeedback;
use App\Models\ExamRequest;
use App\Models\UcasRequest;
use App\Models\StatementsOfEntry;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Alert;
use Image;
use PDF;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){

        $totalwallet=Wallet::where('user_id',Auth::user()->id)->where('is_verified',1)->where('amount_type','Dabit')->sum('amount');

        $totalbooking=ExamRequest::where('user_id',Auth::user()->id)->where('is_deleted',1)->where('is_completed_from',1)->orderBy('id','DESC')->limit(5)->get();
        return view('frontend.student.studentdashboard',compact('totalwallet','totalbooking'));

    }
    public function updatepassword(){

        return view('frontend.student.updatepassword');
        
    }

    // 
    public function updatepasswordStore(Request $request){
        
        $validatedData = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|min:6',
            'password_confirmation' => 'required',
        ]);
        $password = Auth::user()->password;
        $oldpass = $request->current_password;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
               
                Alert::success('Success', 'Success');
                return Redirect()->back();
            } else {
                Alert::error('error', 'Faild ! Please Try Again');
                return Redirect()->back();
            }
        } else {
            Alert::error('error', 'Current Password Is Not Correct');
            return Redirect()->back();
        }
    }

    // 
    public function updateprofile(){

        return view('frontend.student.updateprofile');
        
    }


    public function updateprofileStore(Request $request){
        
        $validatedData = $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'address_line_one' => 'required',
            'postcode' => 'required',
        ]);

        $insert=User::where('id',Auth::user()->id)->update([
            'name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'student_year'=>$request->student_year,
            'gender'=>$request->gender,
            'student_school'=>$request->school,
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address_line_one,
            'city'=>$request->city,
            'country'=>$request->country,
            'address_two'=>$request->address_line_two,
            'zip'=>$request->postcode,
        ]);
        if ($request->hasFile('thumbnail_img')) {
            $image = $request->file('thumbnail_img');
            $ImageName = 'Student' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/student/' . $ImageName);
            User::where('id', Auth::user()->id)->update([
                'photo' => 'uploads/student/' . $ImageName,
            ]);
        }
        if ($insert) {
            Alert::toast('Update Success!', 'success');
            return Redirect()->back();
        } else {
            Alert::toast('Faild ! Please Try Again','error');
            return Redirect()->back();
        }
    }
    // 
    public function savetutor(){
        $alldata=SaveTutor::where('student_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.student.savetutor',compact('alldata'));
    }

    // request list
    public function studentrequestlist(){
        $alldata=StudentTutorRequest::where('student_id',Auth::user()->id)->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('frontend.student.studentrequestlist',compact('alldata'));
    }

    public function studentrequestdelete($id){
        $delete=StudentTutorRequest::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if ($delete) {
            Alert::success('Success', 'Success');
            return Redirect()->back();
        } else {
            Alert::error('error', 'Faild ! Please Try Again');
            return Redirect()->back();
        }
    }
    // 
    public function studentrequestupdate($id){
        $allsubject=TutoringSubject::where('is_deleted',0)->get();
        $data=StudentTutorRequest::where('student_id',Auth::user()->id)->where('id',$id)->first();
        return view('frontend.student.requestupdate',compact('data','allsubject'));
    }

    public function studentrequsubmit(Request $request,$id){
        
        $validated = $request->validate([
            
            'time' => 'required',
        ]);
       
        $update=StudentTutorRequest::where('id',$request->id)->update([
         
            'tutor_for'=>$request->tutor_type,
            'subject'=>$request->subject,
            'level'=>$request->level,
            'lessons_type'=>$request->lession_type,
            'exam_board'=>$request->exam_board,
            'pick_time'=>$request->time,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($update){
            Alert::toast('Update Success!', 'success');
            return redirect()->back();
        }else{
            Alert::toast('Faild! Please Try Again!', 'error');
            return redirect()->back();
        }
    }

    // 
    public function lessioncomplate(){
        $alldata=TutorComplatelesson::where('student_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.student.lessioncomplate',compact('alldata'));
    }
    
    public function tutorHireList(){
        $alldata=StudentTutorRequest::where('student_id',Auth::user()->id)
        ->where('is_deleted',0)
        ->where('is_approve',1)
        ->with(['Student','Tutor'])
        ->orderBy('id','DESC')->get();
        return view('frontend.student.tutorhirelist',compact('alldata'));
    }

    // 
    public function tutorHireview($id){
        $data=StudentTutorRequest::where('student_id',Auth::user()->id)->where('id',$id)->first();
        $alllessonhistory=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$data->id)->paginate(1);

        $totalhourcompleted=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$data->id)->where('is_deletd',0)->where('is_approve',1)->sum('total_hour');

        return view('frontend.student.requestview',compact('data','alllessonhistory','totalhourcompleted'));
    }

    public function lessioncomplateview($id){
        $data=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->orderBy('id','DESC')->first();
        return view('frontend.student.lessoncompetemanage.view',compact('data'));
    }

    // 
    public function lessioncomplatestatusupdate(Request $request){



        // check due payment

        $check=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->where('is_approve',1)->first();
       
        if( $check){
            $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->update([
                'student_query'=>$request->input('query'),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
            Alert::toast('Already Approve!', 'success');
            return redirect()->back();
        }else{

        $lessondetails=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->first();
        $duepayment=StudentTutorRequest::where('id',$lessondetails->course_id)->select(['id','order_id','due_hour','due_amount','total_hour','intotal_amount','total_amount','paid_hour'])->first();
        $completed_hour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$lessondetails->course_id)->where('is_approve',1)->sum('total_hour');

        if( $duepayment->paid_hour >=  $completed_hour){

                $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->update([
                    'is_approve'=>$request->input('is_approve'),
                    'student_query'=>$request->input('query'),
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);

                if($request->is_approve==1){
                    // for tutor
                    $rand=rand(111,999);
                    $mainhouramount=$request->input('hour_rate') * $request->input('total_hour');
                    $rate = $mainhouramount * 60 / 100;
                    $insertone=Wallet::insert([
                        'user_id'=>$request->input('tutor_id'),
                        'amount'=> $rate,
                        'order_id'=>$request->input('order_id'),
                        'amount_type'=>'Dabit',
                        'is_verified'=> 1,
                        'date'=>Carbon::now()->toDateTimeString(),
                        'created_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                    // for student
                    $inserttwo=Wallet::insert([
                        'user_id'=>Auth::user()->id,
                        'amount'=>$request->input('hour_rate') * $request->input('total_hour'),
                        'order_id'=>$request->input('order_id'),
                        'amount_type'=>'Credit',
                        'is_verified'=> 1,
                        'date'=>Carbon::now()->toDateTimeString(),
                        'created_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                    

                }

                if($update){
                    Alert::toast('Update Success!', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Faild! Please Try Again!', 'error');
                    return redirect()->back();
                }
            }else{
                
                Alert::toast('Pay First!', 'danger');
                return redirect('/student/due_amount/paid/'.$duepayment->order_id);

            }
        }

    }


    public function feedbacksubmit(Request $request){
        $check=Studentfeedback::where('student_id',Auth::user()->id)->where('course_id',$request->course_id)->first();
        if($check){
            Alert::toast('Already You Given FeedBack', 'error');
            return redirect()->back();
        }else{
            $insert=Studentfeedback::insert([
                'star'=>$request->rate,
                'details'=>$request->feedback_details,
                'student_id'=>Auth::user()->id,
                'tutor_id'=>$request->tutor_id,
                'course_id'=>$request->course_id,
                'order_id'=>$request->order_id,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            if($insert){
                Alert::toast(' Success!', 'success');
                return redirect()->back();
            }else{
                Alert::toast('Faild! Please Try Again!', 'error');
                return redirect()->back();
            }
        }

    }

    // lessioncomplateapprove 
    public function lessioncomplateapprove($id){


        // check due payment

        $check=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->where('is_approve',1)->first();
       
        if($check){
            Alert::toast('Already Approve!', 'success');
            return redirect()->back();
        }else{

            $lessondetails=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->first();
            $duepayment=StudentTutorRequest::where('id',$lessondetails->course_id)->select(['id','order_id','due_hour','due_amount','total_hour','intotal_amount','total_amount','paid_hour'])->first();
            $completed_hour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$lessondetails->course_id)->where('is_approve',1)->sum('total_hour');

         

            if( $duepayment->paid_hour >=  $completed_hour){

                    $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->update([
                    'is_approve'=>1,
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);

                $data=TutorComplatelesson::where('student_id',Auth::user()->id)->with('Course')->where('id',$id)->first();
                // for tutor
                $rand=rand(111,999);
                $mainhouramount=$data->Course->hour_rate * $data->total_hour;
                $rate = $mainhouramount * 60 / 100;
                $insertone=Wallet::insert([
                    'user_id'=>$data->tutor_id,
                    'amount'=> $rate,
                    'order_id'=>$data->Course->order_id,
                    'amount_type'=>'Dabit',
                    'is_verified'=> 1,
                    'date'=>Carbon::now()->toDateTimeString(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);
                // for student
                $inserttwo=Wallet::insert([
                    'user_id'=>Auth::user()->id,
                    'amount'=>$data->Course->hour_rate * $data->total_hour,
                    'order_id'=>$data->Course->order_id,
                    'amount_type'=>'Credit',
                    'is_verified'=> 1,
                    'date'=>Carbon::now()->toDateTimeString(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                if($update){
                    Alert::toast('Update Success!', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Faild! Please Try Again!', 'error');
                    return redirect()->back();
                }
            }else{

                Alert::toast('Pay First!', 'danger');
                return redirect('/student/due_amount/paid/'.$duepayment->order_id);
            }



            
        }
    }

    public function lessioncomplatereject($id){

        $update=TutorComplatelesson::where('id',$id)->update([
            'is_approve'=>2,
        ]);

        if($update){
            Alert::toast(' Success!', 'success');
            return redirect()->back();
        }else{
            Alert::toast('Faild! Please Try Again!', 'error');
            return redirect()->back();
        }
    }

    // exam centre
    public function exambookinglist(){
        $alldata=ExamRequest::where('is_deleted',1)->where('user_id',Auth::user()->id)->where('is_completed_from',1)->orderBy('id','DESC')->get();
        return view('frontend.student.exambooking',compact('alldata'));
    }


  public function exambookingdelete($id){
        $delete=ExamRequest::where('id', $id)->update([
            'is_deleted'=>0,
        ]);
           if ($delete) {
            Alert::toast('Delete success', 'success');
             return redirect()->back();
        } else {
            Alert::toast('Something Wrong', 'error');
            return redirect()->back();
        }
    }

    public function exambookingdetails($booking_id){
        $data=ExamRequest::where('booking_id', $booking_id)->first();
        return view('frontend.student.exambookingdetails',compact('data'));
    }
    
    public function downloadsinvoice($id){
       
        $data=ExamRequest::where('booking_id', $id)->first();
        $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
        
        return $pdf->stream();
        return $pdf->download('myexambooking.pdf');
    }
    
    public function ucasexambookinglist(){
        $alldata=UcasRequest::where('user_id',Auth::user()->id)->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('frontend.student.ucaslist',compact('alldata'));
    }
    
     public function ucasexambookingdetails($ucas_booking_id){
        $data=UcasRequest::where('ucas_booking_id',$ucas_booking_id)->first();
        return view('frontend.student.ucasdetails',compact('data'));
    }
    
    public function ucasexambookingdelete($ucas_booking_id){
        $delete=UcasRequest::where('id',$ucas_booking_id)->update([
            'is_deleted'=>1,
        ]);
          if ($delete) {
            Alert::toast('Delete success', 'success');
             return redirect()->back();
        } else {
            Alert::toast('Something Wrong', 'error');
            return redirect()->back();
        }
    }
    
    public function ucasexambookingInvoice($ucas_booking_id){
       
        $data=UcasRequest::where('ucas_booking_id', $ucas_booking_id)->first();
        $pdf = PDF::loadView('invoice.ucasinvoice',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
        
        return $pdf->stream();
        return $pdf->download('ucasexambooking.pdf');
    }
    
    public function statementofentry($booking_id){
        $alldata=StatementsOfEntry::where('candidate_id',Auth::user()->id)->where('booking_id',$booking_id)->get();
        return view('frontend.student.statementsofentries',compact('alldata'));
        
    }
    
    public function recentphotoUpdate(Request $request){
        if ($request->hasFile('thumbnail_img')) {
                $extensiontwo = $request->thumbnail_img->getClientOriginalExtension();
                    if($extensiontwo !='pdf'){
                    
                        $image = $request->file('thumbnail_img');
                        $ImageName = 'recent_photo' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                        $myupdate=ExamRequest::where('id',$request->exam_id)->update([
                            'recent_photo' => 'uploads/student/exambooking/' . $ImageName,
                        ]);
                         if($myupdate){
                                Alert::toast('Update success', 'success');
                                return redirect()->back();
                            }else{
                                 Alert::toast('Something Wrong', 'error');
                                return redirect()->back();
                            }
                    }else{
                            $photos =$request->file('thumbnail_img');
                            $names = 'recent_photo'.Auth::user()->id.time().'.'.$photos->getClientOriginalExtension();
                            $newfiles =$photos->move(public_path().'/uploads/student/', $names);
                            $myupdate=ExamRequest::where('id',$request->exam_id)->update([
                                'recent_photo' => 'uploads/student/'.$names,
                            ]);
                             if($myupdate){
                                Alert::toast('Update success', 'success');
                                return redirect()->back();
                            }else{
                                 Alert::toast('Something Wrong', 'error');
                                return redirect()->back();
                            }
                    }
                }
        
    }
    
       
    public function photoIdUpdate(Request $request){
        
        
                if ($request->hasFile('fileUpload')) {
                    $extension = $request->fileUpload->getClientOriginalExtension();
                    if($extension !='pdf'){
                               $image = $request->file('fileUpload');
                                $ImageName = 'photo_id' .Auth::user()->id. '_' . time() . '.' . $image->getClientOriginalExtension();
                                Image::make($image)->save('uploads/student/exambooking/' . $ImageName);
                                $myupdate=ExamRequest::where('id',$request->exam_id)->update([
                                    'photo_id' => 'uploads/student/exambooking/' . $ImageName,
                                ]);
                                
                         if($myupdate){
                                Alert::toast('Update success', 'success');
                                return redirect()->back();
                            }else{
                                 Alert::toast('Something Wrong', 'error');
                                return redirect()->back();
                            }
                          
                        }else{
                        
                            $photo =$request->file('fileUpload');
                            $name = 'photo_id'.Auth::user()->id.time().'.'.$photo->getClientOriginalExtension();
                            $newfile =$photo->move(public_path().'/uploads/student/', $name);
                            $myupdate=ExamRequest::where('id', $request->exam_id)->update([
                                'photo_id' => 'uploads/student/'.$name,
                            ]);
                            if($myupdate){
                                Alert::toast('Update success', 'success');
                                return redirect()->back();
                            }else{
                                 Alert::toast('Something Wrong', 'error');
                                return redirect()->back();
                            }
                            
                        }
                    }
                    
             
        
    }
    
    
    public function otheroptionupdate(Request $request){
        
        $update=ExamRequest::where('id',$request->id)->update([
                'uci'=>$request->uci,
                'uci_number'=>$request->uci_number,
                'uln'=>$request->uln,
                'uln_number'=>$request->uln_number,
                'caring_forwad'=>$request->caring_forwad,
                'caring_forwad_details'=>$request->caring_forwad_details,
                'retaking_exams'=>$request->retaking_exams,
                'retaking_exams_name'=>$request->retaking_exams_name,
        ]);
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
            
            
              if($update){
                    Alert::toast('Update success', 'success');
                    return redirect()->back();
                }else{
                     Alert::toast('Something Wrong', 'error');
                    return redirect()->back();
                }
                            
        
    }



}
