<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CustomValidationController extends Controller
{
	public function verify($token)
	{
		$user = User::where('verify_token', $token)->first();

		if(!$user){
			App::abort(404);
		}

		if(!$user->email_verified_at){
			$user->email_verified_at = Carbon::now();
			$user->save();
		}

		Auth::login($user);

		return redirect()->route('profile.index');
	}
}
