<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class socialAuthController extends Controller
{
    // Redirect the user to the Google authentication page. 

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try{
            $google_user = Socialite::driver('google')->user();
            // dd($google_user);

            $user =Admin::where('googleId', $google_user->getId())->first();

            if(!$user){
                $new_user = Admin::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'googleId' => $google_user->getId(),
                ]);

                Auth::login($new_user);

                return redirect()->route('dashboard');
            }
            else{
                Auth::login($user);
                return redirect()->route('dashboard');

            }
        } catch(\Throwable $th) {
            dd('something went wrong!'. $th->getMessage());
        }
       
    }


}
