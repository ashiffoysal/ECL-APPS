<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TutoringSubject;
use App\Models\BeforeRequestTutor;
use App\Models\StudentTutorRequest;
use Carbon\Carbon;
use Auth;
use Alert;

class TutorHireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tutorhire($id){
        $data=User::where('id',$id)->first();
        $allsubject=TutoringSubject::get();
        return view('frontend.tutorfind.submitrequest',compact('data','allsubject'));

    }


    public function tutorhiresubmit(Request $request){

      if(Auth::user()->user_type==2){
            Alert::toast('You are Tutor!You Cannot Hire', 'error');
            return redirect()->back();
        }else{
        $order_id=rand(1111,99999);
        $t_id=$request->tutor;
        $diffInMonths=Carbon::now()->diffInMonths(Carbon::parse($request->enddate));
        $diffInweek=Carbon::now()->diffInWeeks(Carbon::parse($request->enddate));
        $data=BeforeRequestTutor::insert([
                'order_id'=>$order_id,
                'tutor_id'=>$request->tutor,
                'student_id'=>Auth::user()->id,
                'tutor_for'=>$request->tutor_type,
                'subject'=>$request->subject,
                'level'=>$request->level,
                'lessons_type'=>$request->lession_type,
                'exam_board'=>$request->exam_board,
                'pick_date'=>Carbon::parse($request->date),
                'pick_time'=>$request->time,
                'total_hour'=>$request->approximate_hour,
                'hourly_rate'=>$request->hourly_rate,
                'end_date'=>Carbon::parse($request->enddate)
            ]);
        

          
                // Alert::toast('Success!Please Wait For Confirmation', 'success');
                return redirect('tutor/hire/payment-details/'.$order_id.'/'.$diffInweek.'/'.$diffInMonths.'/'.$t_id);
           
            }

    

    }


    public function paymentProcess($order_id,$diffInweek,$diffInMonths,$t_id){
        $user=User::where('id',$t_id)->select(['id','photo','name'])->first();
       
        $data=BeforeRequestTutor::where('order_id',$order_id)->first();
        return view('frontend.tutorfind.payment',compact('order_id','t_id','data','user','diffInweek'));
    }
}
