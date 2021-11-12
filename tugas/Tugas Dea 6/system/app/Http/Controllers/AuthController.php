<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	function showLogin()
	{
		return view('Login');
	}
	function LoginProcess()
	{
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('admin/beranda')->with('success', 'berhasil login');
		} else {
			return back()->with('danger', 'login anda gagal');
		}
	}
	function logout()
	{
		Auth::logout();
		return redirect('login');
	}
	
}
