<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Alert;


class FacebookSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            dd($user);

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                return redirect('/student/dashboard');
            } else {
                if($user->email ==''){
                
                    Alert::toast('You Have No Email! Faild to login', 'error');
                    return redirect()->back();
                      
                }else{
                    $newUser = User::create([
                        'name' => $user->name,
                        'photo' => $user->avatar,
                        'email' => $user->email,
                        'social_id' => $user->id,
                        'social_type' => 'google',
                        'is_verified' => 1,
                        'password' => encrypt('my-facebook')
                    ]);
                    Auth::login($newUser);
                    return redirect('/student/dashboard');
                }

                
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
