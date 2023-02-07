<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentTutorRequest;
use Carbon\Carbon;

class StudentTutorRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $alldata=StudentTutorRequest::where('is_deleted',0)->where('is_approve',0)->with(['Student','Tutor'])->orderBy('id','DESC')->get();
        return view('backend.tutoringrequestlist.index',compact('alldata'));
    }

    public function delete($id){
        $delete=StudentTutorRequest::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if($delete) {
            $notification = array(
                'messege' => 'delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function view($id){
        $data=StudentTutorRequest::where('id',$id)->first();
        return view('backend.tutoringrequestlist.view',compact('data'));
    }

    // 
    public function assigntutor(){
        $alldata=StudentTutorRequest::where('is_deleted',0)->where('is_approve',1)->with(['Student','Tutor'])->orderBy('id','DESC')->get();
        return view('backend.assigntutor.index',compact('alldata'));
    }


    public function approve(Request $request){
        $update=StudentTutorRequest::where('id',$request->id)->update([
            'is_approve'=>$request->is_approve,
            'updated_at'=>Carbon::now()->toDateTimeString(),
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
}
