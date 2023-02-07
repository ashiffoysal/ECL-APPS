<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\Models\SaveTutor;

class SaveTutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function savetutor(Request $request){
       $insert=SaveTutor::insert([
           'student_id'=>$request->student_id,
           'tutor_id'=>$request->tutor_id,
       ]);
       if ($insert) {
        Alert::success('Success', 'Success');
        return Redirect()->back();
        } else {
            Alert::error('error', 'Faild ! Please Try Again');
            return Redirect()->back();
        }
    }
}
