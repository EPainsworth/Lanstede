<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    public function redirectToProvider()
    {
        return Socialite::driver('azure')->redirect();
    }


    public function handleProviderCallback()
    {
        $azureUser = Socialite::driver('azure')->user();

        $user = User::where('email', $azureUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $azureUser->getName(),
                'email' => $azureUser->getEmail(),
            ]);
        }

        Auth::login($user, true);

        return redirect('/inschrijven');
    }
    public function index()
    {
        return view('admin.index',[
            'user' => User::all()
        ]);
    }
}
