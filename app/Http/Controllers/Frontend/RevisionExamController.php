<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevisionExamController extends Controller
{
    public function create(){
        return view('frontend.revisionexam.examform');
    }
}
