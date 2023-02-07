<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NotifyChat;
use Carbon\Carbon;
use App\Mail\UserNotifyMail;
use Mail;

class MailSendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create($id)
    {
        $data=User::where('id',$id)->first();
        $alluser=User::select(['name','email','photo','user_type','id'])->get();
        $allmessage=NotifyChat::where('user_id',$id)->orderBy('id','ASC')->get();
        $update=NotifyChat::where('user_id',$id)->where('admin_is_seen',0)->select(['id','admin_is_seen'])->get();
        foreach($update as $datasss){
            $newupdate=NotifyChat::where('id',$datasss->id)->update([
                'admin_is_seen'=>1,
                ]);
        }
        
        return view('backend.mailsend.index',compact('data','alluser','allmessage'));
    }

    // 
    public function store(Request $request){
        $insert=NotifyChat::insert([
            'user_id'=>$request->user_id,
            'message'=>$request->message,
            'created_at'=>Carbon::now()->toDateTimeString(),
            'is_admin_send'=>1,
            'admin_is_seen'=>1,
        ]);
        if ($insert) {
            
                $data=User::where('id',$request->user_id)->select(['id','email'])->first();
                Mail::to($data->email)->send(new UserNotifyMail($data));
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
    
   public function mainindex(){
       $alluser=User::select(['name','email','photo','user_type','id'])->get();
        return view('backend.mailsend.mainindex',compact('alluser'));
    }
}
