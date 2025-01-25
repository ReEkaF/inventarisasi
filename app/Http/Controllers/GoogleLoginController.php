<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            if($googleUser){
                $user = User::where('email', $googleUser->email)->first();
                if($user){
                    Auth::login($user);
                    $user->update([
                        'google_id'=>$googleUser->id,
                        'google_token'=>$googleUser->token,
                    ]);
                    return redirect()->route('/dashboard');
                }
                return redirect('/login')->with('error', 'Login gagal.');
            }
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login gagal.');
        }
    }
}
