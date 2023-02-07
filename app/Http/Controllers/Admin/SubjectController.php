<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Carbon\Carbon;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        return view('backend.subject.create');
    }

    // 
    public function index(){
        $alldata=Subject::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.subject.index',compact('alldata'));
    }
    // 
    public function store(Request $request){
       $validated = $request->validate([
            'exam_type' => 'required',
            'subject_name' => 'required',
            'unit_code' => 'required',
            'exam_fees' => 'required',
            'late_fees' => 'required',
            'high_late_fees' => 'required',
            'practical' => 'required',
        ]);
       $insert=Subject::insertGetId([
            'exam_type'=>$request->exam_type,
            'exam_board'=>$request->exam_board,
            'subject_name'=>$request->subject_name,
            'unit_code'=>$request->unit_code,
            'exam_fees'=>$request->exam_fees,
            'late_fees'=>$request->late_fees,
            'high_late_fees'=>$request->high_late_fees,
            'is_practical'=>$request->practical,
            'practical_fees'=>$request->practical_fees,
            'has_option_code'=>$request->has_option_code,
            'created_at'=>Carbon::now()->toDateTimeString(),
       ]);

        $option_code = array();
        if ($request->has('option_code')) {
            foreach ($request->option_code as $key => $no) {
                $item['option_code'] = $request->option_code[$key];
                $item['description'] = $request->description[$key];
                array_push($option_code, $item);
            }
            $update=Subject::where('id',$insert)->update([
                'option_code_details'=>json_encode($option_code),
            ]);
        }
       if($insert) {
            $notification = array(
                'messege' => 'Insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // edit
    public function edit($id){
        $edit=Subject::where('id',$id)->first();
        return view('backend.subject.update',compact('edit'));
    }

    public function delete($id){
        $edit=Subject::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if ($edit) {
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


     public function update(Request $request){
   
    $validated = $request->validate([
            'exam_type' => 'required',
            'subject_name' => 'required',
            'unit_code' => 'required',
            'exam_fees' => 'required',
            'late_fees' => 'required',
            'high_late_fees' => 'required',
            'practical' => 'required',
        ]);
       $insert=Subject::where('id',$request->id)->update([
            'exam_type'=>$request->exam_type,
            'exam_board'=>$request->exam_board,
            'subject_name'=>$request->subject_name,
            'unit_code'=>$request->unit_code,
            'exam_fees'=>$request->exam_fees,
            'late_fees'=>$request->late_fees,
            'high_late_fees'=>$request->high_late_fees,
            'is_practical'=>$request->practical,
            'practical_fees'=>$request->practical_fees,
            'has_option_code'=>$request->has_option_code,
            'updated_at'=>Carbon::now()->toDateTimeString(),
       ]);

        $option_code = array();
        if ($request->has('option_code')) {
            foreach ($request->option_code as $key => $no) {
                $item['option_code'] = $request->option_code[$key];
                $item['description'] = $request->description[$key];
                array_push($option_code, $item);
            }
            $update=Subject::where('id',$request->id)->update([
                'option_code_details'=>json_encode($option_code),
            ]);
        }
       if($insert) {
            $notification = array(
                'messege' => 'Update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function gcsesubject(){

       $alldata=Subject::where('exam_type','GCSE')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
       return view('backend.subject.gcsesubject',compact('alldata'));


    }
    public function igcsesubject(){
         $alldata=Subject::where('exam_type','IGCSE')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
       return view('backend.subject.igcsesubject',compact('alldata'));
    }
    public function alevelsubject(){
        $alldata=Subject::where('exam_type','A Level')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
       return view('backend.subject.alevelsubject',compact('alldata'));
    }

     public function functionalskillssubject(){

        $alldata=Subject::where('exam_type','FUNCTIONAL SKILLS')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
        return view('backend.subject.functionalskillssubject',compact('alldata'));

     }

     public function aatsubject(){

        $alldata=Subject::where('exam_type','AAT')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
        return view('backend.subject.aatsubject',compact('alldata'));

     }

     public function accasubject(){

        $alldata=Subject::where('exam_type','ACCA')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
        return view('backend.subject.accasubject',compact('alldata'));

     }
     
     
     
     public function aslevelsubject(){
         
           $alldata=Subject::where('exam_type','AS Level')->where('is_deleted',0)->orderBy('subject_name','ASC')->get();
       return view('backend.subject.aslevel',compact('alldata'));
       
     }
}
