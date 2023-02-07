<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Subcategory;

class GetSubjectController extends Controller

{
    

    public function gcsegetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','GCSE')->get();
        return response()->json($data);
    }

    public function igcsegetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','IGCSE')->get();
        return response()->json($data);
    }

    public function alevelgetsubject($type_id){

        $data=Subject::where('exam_board',$type_id)->where('exam_type','A Level')->get();
        return response()->json($data);
    }
    
    public function aslevelgetsubject($type_id){
        $data=Subject::where('exam_board',$type_id)->where('exam_type','AS Level')->get();
        return response()->json($data);
    }
    
        public function getqualification($program_id){

        $data=Subcategory::where('cate_id',$program_id)->get();
        return response()->json($data);
    }

    public function getaatsubject($qualification_id){
        
        $data=Subject::where('aat_subcate',$qualification_id)->get();
        return response()->json($data);
    }

}
