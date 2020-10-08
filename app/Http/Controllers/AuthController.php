<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
	public function getLogin()
	{
		return view('login');
	}

	public function postLogin(Request $request)
	{
		$login = $request->only('email', 'password');

		if (!Auth::attempt($login)) {
			return redirect()->back();
		} else {
			return redirect('/home');
		}
	}

	public function getRegister()
	{
		return view('register');
	}

	public function postRegister(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed',
		]);

		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
		]);

		return redirect()->back();
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/login');
	}
}
