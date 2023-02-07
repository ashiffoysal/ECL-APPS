<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AmountWithdrawrequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Mail\CustomerRegister;
use Alert;
use Mail;

class TuitorController extends Controller
{
    public function applyfrom(){
        return view('frontend.tuitor.applyfrom');
    }

    public function singup(){

        return view('frontend.tuitor.register');
    }

    public function singupstore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email'=> 'required|email|unique:users',     
            'password' => 'required',
            'confirm_password' => 'required|same:password' 
        ]);
        $insert=User::insertGetId([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'user_type'=>2,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($insert){

            $email = md5($request->email);
            $code = random_int(100000, 999999);
    
            User::where('id', $insert)->update([
                'code' => $code,
            ]);

            Alert::success('Success', 'Message Send Success');
            Mail::to($request->email)->send(new CustomerRegister($code));
    
            return redirect('/email/verify/' . $email . '/' . $insert);


            Alert::success('Success', 'Message Send Success');
            // return redirect()->route('register.success');
        }else{
            Alert::success('Faild', 'Message Send Faild');
            return redirect()->back();
        }
    }
    public function registersuccess(Request $request){

        return view('frontend.tuitor.success_message');
    }

   
}
