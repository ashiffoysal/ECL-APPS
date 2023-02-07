<?php

namespace App\Http\Controllers\Frontend;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\UserRegister;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\VerificationCenter;

class UserLoginController extends Controller
{

    public function customLogin(Request $request)
    {
      // return $request->previous_url;
        //dd($request->all());
        $request->validate([
            'email_login' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email_login, 'password' => $request->password,'is_verified' => 1])) {

            if(Auth::user()->user_type==1){
                 if($request->previous_url=='login'){
                Alert::toast('Login Success', 'success');
                return redirect('student/dashboard');

                }else{
                    Alert::toast('Login Success', 'success');
                    return redirect($request->previous_url);
                }
            }elseif(Auth::user()->user_type==2){

                Alert::toast('Login Success', 'success');
                return redirect('agent/dashboard');
            }
           


            
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $insert = User::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $email = md5($request->email);
        $code = random_int(100000, 999999);

        User::where('id', $insert)->update([
            'code' => $code,
        ]);
        Mail::to($request->email)->send(new UserRegister($code));

        return redirect('/email/verify/' . $email . '/' . $insert);
    }
    public function email_verify($email, $id)
    {
        return view('frontend.verify.verify', compact('id'));
    }

    public function verify_code(Request $request)
    {
        $validated = $request->validate([
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'forth' => 'required',
            'five' => 'required',
            'six' => 'required',
        ]);
         $first=$request->first;
         $second=$request->second;
         $third=$request->third;
         $forth=$request->forth;
         $five=$request->five;
         $six=$request->six;
        $maincode=$first.$second.$third.$forth.$five.$six;
       
        $user = User::where('id', $request->id)->where('code', $maincode)->first();
        if ($user) {
            $userVerified = User::where('id', $request->id)->update([
                'is_verified' => 1,
                'code' => NULL,
            ]);
            if ($userVerified) {
                Auth::login($user);
                Alert::toast('Successfully Verified Account', 'success');
                return redirect('/student/dashboard');
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        } else {
            Alert::toast('Seems like you have entered wrong code', 'error');
            return redirect()->back();
        }
    }


    public function forgetpass(){
        return view('auth.forgetpassword');
    }
    
    public function forgetpasssubmit(Request $request){
        $validated = $request->validate([
            'email' => 'required',
        ]);
        $check=User::where('email', $request->email)->first();
        if ($check) {
             $code = random_int(100000, 999999);
            User::where('id', $check->id)->update([
                'code' => $code,
            ]);
            $email = md5($request->email);
            
            
            $data = [
              'subject' => 'Exam Centre Forget Password',
              'email' => $request->email,
              'code' => $code,
            ];
    
             Mail::send('mail.forgetpassword', $data, function($message) use ($data) {
              $message->to($data['email'])
              ->subject($data['subject']);
            });
             Alert::toast('Code Send! Please Check your Email', 'success');
            return redirect('forget/password-update/'.$email.'/'.$check->id);
           
        } else {
            Alert::toast('Email Not Found', 'error');
            return redirect()->back();
        }
        
    }
    public function forgetpasssupdate($email,$id){
         return view('auth.updatepassword',compact('email','id'));
    }
    
    public function forgetpasssupdatesubmit(Request $request){
          $validated = $request->validate([
            'code' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
            
        ]);
        $check=User::where('id',$request->id)->select(['code','id'])->first();
        if($check->code==$request->code){
            
                $update=User::where('id',$request->id)->update([
                    
                    'password'=>Hash::make($request->password), 
                ]);
                 if ($update) {
                    Alert::toast('Successfully Update Password', 'success');
                    return redirect('/login');
                } else {
                    Alert::toast('Something Went Wrong', 'error');
                    return redirect()->back();
                }
                
            
            
        }else{
            Alert::toast('Your Code Is Invalid', 'error');
            return redirect()->back();
        }
    }
}
