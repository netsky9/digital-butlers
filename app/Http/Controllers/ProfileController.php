<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function index()
	{
		$user = auth()->user();

		return view('profile', compact('user'));
	}

	public function update(ProfileUpdateRequest $request)
	{
		$user = auth()->user();
		$data = $request->all();

		$result = $user
			->fill($data)
			->save();

		if($result){
			return back()
				->with('success',"The user was changed successful!");
		}else{
			return back()
				->with('error',"The user wasn't changed! Please try again!");
		}

	}
}
