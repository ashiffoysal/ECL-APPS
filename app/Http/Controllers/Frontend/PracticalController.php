<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticalController extends Controller
{
    public function alevelindex(){

        return view('frontend.practicalendorsment.alevel');
    }

     public function gcseindex(){

        return view('frontend.practicalendorsment.gcse');

     }

     public function invigilationservices(){

        return view('frontend.invigilationservices.index');
     }

}
