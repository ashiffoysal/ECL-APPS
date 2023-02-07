<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Carbon\Carbon;

class ExamdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        
        $alldata=Subject::orderBy('id','DESC')->Orwhere('exam_type','GCSE')->Orwhere('exam_type','IGCSE')->Orwhere('exam_type','A Level')->get();
        return view('backend.examdate.index',compact('alldata'));
    }

    public function update(Request $request){
        $update=Subject::where('id',$request->id)->update([
            'exam_date'=>$request->val,
            'update_exam_date'=>Carbon::now(),
        ]);
        if($update){
            return response('done');
        }else{
            return response('wrong');
        }
    }
    
    
    public function subjectdate($id){
        $data=Subject::where('id',$id)->first();
        return view('backend.examdate.examdate',compact('data'));
    }
}
