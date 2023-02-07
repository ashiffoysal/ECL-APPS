<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\Models\StudentFee;
use App\Models\User;
use App\Models\TutoringSubject;
use App\Models\TutorEducation;
use App\Models\Studentfeedback;
use App\Models\TutorComplatelesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function aboutUs()
    {
        $data = AboutUs::where('keyword', 'about_us')->select(['details', 'id', 'title', 'image'])->first();
        $allfees = StudentFee::where('is_deleted',0)->get();
        return view('frontend.aboutus.index', compact('data','allfees'));
    }
    public function termsCondition()
    {
        $data = AboutUs::where('keyword', 'terms_condition')->select(['details', 'id', 'title', 'image'])->first();
        // return $data;
        return view('frontend.termscondition.index', compact('data'));
    }
    public function privancyPolicy()
    {
        $data = AboutUs::where('keyword', 'privacy_policy')->select(['details', 'id', 'title', 'image'])->first();
        //return $data;
        return view('frontend.privacypolicy.index', compact('data'));
    }
    public function paymentPolicy()
    {
        $data = AboutUs::where('keyword', 'payment_policy')->select(['details', 'id', 'title', 'image'])->first();
        //return $data;
        return view('frontend.paymentpolicy.index', compact('data'));
    }

    // examtips

    public function examtips(){

        return view('frontend.examtips.index');

    }

    // november retake
   public function novemberretake(){

        return view('frontend.novemberretake.index');
    }

    //functionalskillsexams
    public function functionalskillsexams(){

        return view('frontend.examdetailspage.functionalskillsexam');
    } 

   public function alevelexams(){

        return view('frontend.examdetailspage.alevel');
    } 
   
   public function gcseexams(){

        return view('frontend.examdetailspage.gcse');
        
    }


     public function igcseexams(){

        return view('frontend.examdetailspage.igcse');
        
    }

    // 

    public function accaexams(){

         return view('frontend.examdetailspage.accaexams');
    }

    public function attexams(){

         return view('frontend.examdetailspage.aat-exams');
    }


    public function bookingprocedure(){

          return view('frontend.bookingprocedure.index');
    }

    public function examday(){

         return view('frontend.examday.index');

    }


}
