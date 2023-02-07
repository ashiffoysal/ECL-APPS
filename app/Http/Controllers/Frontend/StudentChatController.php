<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\smschat;
use App\Models\NotifyChat;
use Carbon\Carbon;
use DB;
use Auth;
use Alert;

class StudentChatController extends Controller
{
    
    public function allmessage(){
        
        $alldata=DB::table('smschats')
        ->where('smschats.sender_id',Auth::user()->id)
        ->get();
        
        return view('frontend.studentsmschat.index',compact('alldata'));
         
    }

    public function viewmessage($id){

        $allsms=DB::table('smschats')
        ->where('sender_id',Auth::user()->id)
        ->where('receiver_id',$id)
        ->orderby('id','ASC')
        ->get();
       
        return view('frontend.studentsmschat.viewchat',compact('allsms','id'));

    }

    public function tutormessagesubmit(Request $request){

        $insert=smschat::insert([
            'message'=>$request->message,
            'type'=>'outgoing',
            'receiver_id'=>$request->receiver_id,
            'incomming_id'=>$request->receiver_id,
            'sender_id'=>Auth::user()->id,
            'outgoing_id'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }


    // sms chat
    public function studentnotification(){
        $allsms=NotifyChat::where('user_id',Auth::user()->id)->get();
        $update=NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->get();
        foreach($update as $updata){
            $mainupdte=NotifyChat::where('id', $updata->id)->update([
                'user_is_seen'=>1,
            ]);
        }
        return view('frontend.student.notify',compact('allsms'));
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
