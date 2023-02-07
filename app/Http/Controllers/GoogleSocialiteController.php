<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class GoogleSocialiteController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
           

            $finduser = User::where('email', $user->email)->first();

          

            if ($finduser) {
                 $update=User::where('id',$finduser->id)->update([
                    'is_verified'=>1,
                ]);
                 Auth::login($finduser);
                return redirect('/student/dashboard');
            } else {
               
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'photo' => $user->avatar,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'is_verified' => 1,
                    'user_type' => 1,
                    'created_at'=>Carbon::now()->toDateTimeString(),
                    'password' => encrypt('my-google')
                ]);

                Auth::login($newUser);
                return redirect('/student/dashboard');
            }
            
            
            
            
        } catch (Exception $e) {
            Alert::toast('Already Registerd email use manual login ', 'error');
           return redirect('/login');
        }
    }
}
