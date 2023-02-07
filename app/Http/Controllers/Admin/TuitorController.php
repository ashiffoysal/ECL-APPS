<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentTutorRequest;
use App\Models\TutorComplatelesson;
use App\Models\TutorEducation;
use App\Models\Wallet;
use App\Models\AmountWithdrawrequest;
use App\Models\VerificationCenter;
use Carbon\Carbon;

class TuitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){

        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->get();
        return view('backend.tutormanage.index',compact('alldata'));

    }

    public function details($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();

        $data=User::where('id',$id)->first();

        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();

        return view('backend.tutormanage.view',compact('data','davitamnout','totalwork','totalwork','davitamnout'));
    }

    public function educationdetails($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $educational_in=TutorEducation::where('user_id',$id)->OrderBy('id','DESC')->get();
        return view('backend.tutormanage.educationinformation',compact('data','educational_in','id','totalwork','davitamnout'));
    }

    public function cvdetails($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $alldata=VerificationCenter::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('backend.tutormanage.tutorcv',compact('data','alldata','totalwork','davitamnout'));
    }

    public function history($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $allwallet=Wallet::where('user_id',$id)->orderBy('id','DESC')->get();
        $alltutorlessoncomplate=TutorComplatelesson::where('tutor_id',$id)->orderBy('id','DESC')->get();

        return view('backend.tutormanage.history',compact('data','allwallet','alltutorlessoncomplate','totalwork','davitamnout'));

    }


    // 
   
    public function approve($id){
        $data=User::where('id',$id)->update([
            'is_tutor_approve'=>1,
        ]);
        if($data) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function reject($id){

        $data=User::where('id',$id)->update([
            'is_tutor_approve'=>2,
        ]);
        if($data) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    // 
    public function branchtutor(){
        $alldata=User::where('is_deleted',0)->where('for_branch_tutor',1)->where('user_type',2)->orderBy('id','DESC')->get();
        return view('backend.branchtutor.index',compact('alldata'));
    }

    public function educationdetailsstatus(Request $request){
        $data=TutorEducation::where('id',$request->edu_id)->update([
            'is_verify'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
        ]);
        if($data) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function verificationverified(Request $request){
       
        $update=VerificationCenter::where('id',$request->v_id)->update([
            'is_verify'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
        ]);
        if($update) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

     public function paymentrequest(){
        $alldata=AmountWithdrawrequest::orderBy('id','DESC')->get();
        return view('backend.paymentrequestsend.index',compact('alldata'));
    }



}
