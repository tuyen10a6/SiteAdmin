<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::query()->where('google_id', $google_user->getId())->first();

            if (!$user) {
                $newUser = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'password' => bcrypt(Str::random(16)),
                    'google_id' => $google_user->getId(),
                ]);

                $newUser->password = null;

                $newUser->save();

                Auth::login($newUser);

                return redirect()->intended(route('home'));
            } else {
                Auth::login($user);

                return redirect()->intended(route('home'));
            }
        } catch (\Exception $e) {
            dd('Something went wrong! ' . $e->getMessage());
        }
    }
}
