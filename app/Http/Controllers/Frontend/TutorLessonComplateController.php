<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentTutorRequest;
use App\Models\TutorComplatelesson;
use Carbon\Carbon;
use Auth;
use Alert;

class TutorLessonComplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $alldata=TutorComplatelesson::where('tutor_id',Auth::user()->id)->where('is_deletd',0)->orderBy('id','DESC')->get();
        return view('frontend.tuitor.tutorlessoncomplateindex',compact('alldata'));
    }
    public function add(){
        $allorder=StudentTutorRequest::where('tutor_id',Auth::user()->id)->where('is_approve',1)->where('status',1)->where('tutor_is_approve',1)->select(['order_id','subject','id'])->get();
        return view('frontend.tuitor.lessoncomplaterequestadd',compact('allorder'));
    }
    //
    public function store(Request $request){
      
        $validated = $request->validate([
            'course_list' => 'required',
            'date' => 'required',
            'lesson_complete_details' => 'required',
        ]);
        $student_id=StudentTutorRequest::where('id',$request->course_list)->select(['student_id'])->first();
    
        $insert=TutorComplatelesson::insert([
            'date'=>$request->input('date'),
            'subject'=>$request->input('subject'),
            'course_id'=>$request->input('course_list'),
            'lesson_complete_details'=>$request->input('lesson_complete_details'),
            'query'=>$request->input('query'),
            'total_hour'=>$request->input('hour'),
            'tutor_id'=>Auth::user()->id,
            'student_id'=>$student_id->student_id,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    // edit
    public function edit($id){
        $data=TutorComplatelesson::where('id',$id)->first();
        return view('frontend.tuitor.lessoncomplaterequestedit',compact('data'));
    }

    public function delete($id){

        $delete=TutorComplatelesson::where('tutor_id',Auth::user()->id)->where('id',$id)->delete();
        if ($delete) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }

    }

}
