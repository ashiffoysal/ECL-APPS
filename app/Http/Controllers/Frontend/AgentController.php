<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Wallet;
use App\Models\SaveTutor;
use App\Models\TutoringSubject;
use App\Models\TutorComplatelesson;
use App\Models\StudentTutorRequest;
use App\Models\Studentfeedback;
use App\Models\ExamRequest;

use App\Models\smschat;
use App\Models\NotifyChat;


use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Alert;
use Image;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $totalwallet=Wallet::where('user_id',Auth::user()->id)->where('is_verified',1)->where('amount_type','Dabit')->sum('amount');

        $totalbooking=ExamRequest::where('user_id',Auth::user()->id)->where('is_deleted',1)->where('is_completed_from',1)->orderBy('id','DESC')->limit(5)->get();
        return view('frontend.agent.dashboard',compact('totalwallet','totalbooking'));
    }
    public function updatepassword(){

        return view('frontend.agent.updatepassword');
        
    }

     public function updatepasswordStore(Request $request){
        
        $validatedData = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|min:6',
            'password_confirmation' => 'required',
        ]);
        $password = Auth::user()->password;
        $oldpass = $request->current_password;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
               
                Alert::success('Success', 'Success');
                return Redirect()->back();
            } else {
                Alert::error('error', 'Faild ! Please Try Again');
                return Redirect()->back();
            }
        } else {
            Alert::error('error', 'Current Password Is Not Correct');
            return Redirect()->back();
        }
    }

    public function updateprofile(){

        return view('frontend.agent.updateprofile');
        
    }


    public function updateprofileStore(Request $request){
        
        $validatedData = $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'address_line_one' => 'required',
            'postcode' => 'required',
        ]);

        $insert=User::where('id',Auth::user()->id)->update([
            'name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'student_year'=>$request->student_year,
            'gender'=>$request->gender,
            'student_school'=>$request->school,
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address_line_one,
            'city'=>$request->city,
            'country'=>$request->country,
            'address_two'=>$request->address_line_two,
            'zip'=>$request->postcode,
        ]);
        if ($request->hasFile('thumbnail_img')) {
            $image = $request->file('thumbnail_img');
            $ImageName = 'Student' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/student/' . $ImageName);
            User::where('id', Auth::user()->id)->update([
                'photo' => 'uploads/student/' . $ImageName,
            ]);
        }
        if ($insert) {
            Alert::toast('Update Success!', 'success');
            return Redirect()->back();
        } else {
            Alert::toast('Faild ! Please Try Again','error');
            return Redirect()->back();
        }
    }


      public function exambookinglist(){
        $alldata=ExamRequest::where('is_deleted',1)->where('user_id',Auth::user()->id)->where('is_completed_from',1)->orderBy('id','DESC')->get();
        return view('frontend.agent.exambooking',compact('alldata'));
    }


        public function studentnotification(){
        $allsms=NotifyChat::where('user_id',Auth::user()->id)->get();
        $update=NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->get();
        foreach($update as $updata){
            $mainupdte=NotifyChat::where('id', $updata->id)->update([
                'user_is_seen'=>1,
            ]);
        }
        return view('frontend.agent.notify',compact('allsms'));
    }
    
    public function studentnotificationsubmit(Request $request){
            $insert=NotifyChat::insert([
                'user_id'=>$request->user_id,
                'message'=>$request->message,
                'created_at'=>Carbon::now()->toDateTimeString(),
                'is_admin_send'=>0,
            ]);
            if ($insert) {
                $notification = array(
                    'messege' => 'Send success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Send Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
    }
}
