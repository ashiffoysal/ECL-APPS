<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function elevenplus(){
        return view('frontend.allcourse.elevenplus');
    }
    public function ksonemaths(){
        return view('frontend.allcourse.ksonemath');
    }
    public function ksoneenglish(){

        return view('frontend.allcourse.ksoneenglish');
    }
    public function kstwomaths(){

        return view('frontend.allcourse.kstwomath');
    }

    public function kstwoenglish(){

        return view('frontend.allcourse.kstwoenglish');
    }
    public function ksthree(){
        return view('frontend.allcourse.ksthree');
    }
    public function gcse(){
        return view('frontend.allcourse.gcse');
    }
    public function alevelCourse(){
        return view('frontend.allcourse.alevelcourse');
    }
    
}
