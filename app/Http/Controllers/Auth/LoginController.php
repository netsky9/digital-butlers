<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

	public const ADMIN = '/admin/books';

	public const PROFILE = '/profile';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

	/**
	 * @param Request $request
	 * @param $user
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function authenticated(Request $request, $user)
	{
		if (!$user->email_verified_at) {
			$this->guard()->logout();
			return back()->with('error', 'You need to confirm your account. Please check your email.');
		}
		if($user->isAdmin()){
			return redirect()->intended(self::ADMIN);
		}
		return redirect()->intended(self::PROFILE);
	}

}
