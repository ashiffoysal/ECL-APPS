<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Examessuedate;
use Carbon\Carbon;

class ExamdatemanageController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function create(){

        $first=Examessuedate::where('id',1)->first();
        $second=Examessuedate::where('id',2)->first();
        $third=Examessuedate::where('id',3)->first();
        $forth=Examessuedate::where('id',4)->first();
        $firth=Examessuedate::where('id',5)->first();
       return view('backend.examdatemanage.update',compact('first','second','third','forth','firth'));

    }

    public function getFirstupdate(Request $request){
       
        if($request->name=='GCSE_Retake_entry_date'){
               Examessuedate::where('id',1)->update([
                    'entry_dateline'=>$request->value,
               ]);
        }


        if($request->name=='GCSE_Retake_late_entry_date'){
                 Examessuedate::where('id',1)->update([
                    'entry_latefees'=>$request->value,
               ]);
        }

         if($request->name=='GCSE_Retake_high_late_entry_date'){
               Examessuedate::where('id',1)->update([
                    'entry_highlatefees'=>$request->value,
               ]);
        }

    }


    public function getSecondupdate(Request $request){

        if($request->name=='GCSE_Retake_entry_date'){
               Examessuedate::where('id',2)->update([
                    'entry_dateline'=>$request->value,
               ]);
        }


        if($request->name=='GCSE_Retake_late_entry_date'){
                 Examessuedate::where('id',2)->update([
                    'entry_latefees'=>$request->value,
               ]);
        }

         if($request->name=='GCSE_Retake_high_late_entry_date'){
               Examessuedate::where('id',2)->update([
                    'entry_highlatefees'=>$request->value,
               ]);
        }
    }
        public function getThirdupdate(Request $request){

        if($request->name=='GCSE_Retake_entry_date'){
               Examessuedate::where('id',3)->update([
                    'entry_dateline'=>$request->value,
               ]);
        }


        if($request->name=='GCSE_Retake_late_entry_date'){
                 Examessuedate::where('id',3)->update([
                    'entry_latefees'=>$request->value,
               ]);
        }

         if($request->name =='GCSE_Retake_high_late_entry_date'){
               Examessuedate::where('id',3)->update([
                    'entry_highlatefees'=>$request->value,
               ]);
        }
    }
      public function getFourthupdate(Request $request){

        if($request->name=='GCSE_Retake_entry_date'){
               Examessuedate::where('id',4)->update([
                    'entry_dateline'=>$request->value,
               ]);
        }


        if($request->name=='GCSE_Retake_late_entry_date'){
                 Examessuedate::where('id',4)->update([
                    'entry_latefees'=>$request->value,
               ]);
        }

         if($request->name=='GCSE_Retake_high_late_entry_date'){
               Examessuedate::where('id',4)->update([
                    'entry_highlatefees'=>$request->value,
               ]);
        }
    }
    public function getFiveupdate(Request $request){

        if($request->name=='GCSE_Retake_entry_date'){
               Examessuedate::where('id',5)->update([
                    'entry_dateline'=>$request->value,
               ]);
        }


        if($request->name=='GCSE_Retake_late_entry_date'){
                 Examessuedate::where('id',5)->update([
                    'entry_latefees'=>$request->value,
               ]);
        }

         if($request->name=='GCSE_Retake_high_late_entry_date'){
               Examessuedate::where('id',5)->update([
                    'entry_highlatefees'=>$request->value,
               ]);
        }
    }


}
