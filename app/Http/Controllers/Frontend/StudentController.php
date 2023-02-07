<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Mail\UserRegister;
use Alert;
use Mail;
use Auth;

class StudentController extends Controller
{


    public function registertype(){

        return view('frontend.registertype.registertype');

    }
    // 
    public function singup(){

        return view('frontend.student.register');
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
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'user_type'=>1,
            'is_verified'=>1,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
       if($insert){
          $user= User::where('id',$insert)->first();
            Auth::login($user);
            Alert::toast('Success', 'Registration Success');
            return redirect('/student/dashboard');
            
            // $email = md5($request->email);
            // $code = random_int(100000, 999999);
    
            // User::where('id', $insert)->update([
            //     'code' => $code,
            // ]);

            // Alert::toast('Please Check Your Email and verify Your Account', 'success');
            // Mail::to($request->email)->send(new UserRegister($code));
    
            // return redirect('/email/verify/' . $email . '/' . $insert);
           
        }else{
            Alert::toast('Faild', 'Message Send Faild');
            return redirect()->back();
        }
    }
    // 
  
}
