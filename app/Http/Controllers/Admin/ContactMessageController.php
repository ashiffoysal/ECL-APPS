<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactMesssage;
use Mail;

class ContactMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $alldata=ContactMesssage::orderBy('id','DESC')->get();
        return view('backend.contactmessage.index',compact('alldata'));
    }
    public function delete($id){

        $delete=ContactMesssage::where('id',$id)->delete();
        if ($delete) {
            $notification = array(
                'messege' => 'Delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        
    }


    public function videmessage($id){
        $data=ContactMesssage::where('id',$id)->first();
        $update=ContactMesssage::where('id',$id)->update([
            'is_seen'=>1,
        ]);
        return view('backend.contactmessage.view',compact('data'));
    }
    
    public function sendreply(Request $request,$id){
           $validated = $request->validate([
            'reply' => 'required',
        ]);
         $info=ContactMesssage::where('id',$id)->first();
        
      
         $update=ContactMesssage::where('id',$id)->update([
            'reply'=>$request->reply,
        ]);
        
          $message = [
          
            'reply' =>$request->reply,
            
            ];
         if ($update) {
           $data = [
              'subject' => 'Message Reply',
              'email' => $info->email,
              'reply' => $request->reply,
            ];
    
            Mail::send('mail.contactmessagereply', $data, function($message) use ($data) {
              $message->to($data['email'])
              ->subject($data['subject']);
            });
            
            $notification = array(
                'messege' => ' success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => ' Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
