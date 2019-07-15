<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserAuthController extends Controller
{
    public function Login()
    {
    	return view('Login');
    }

    public function UserLogin(Request $request)
    {
    	if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
    	{
    		return redirect()->back()->withErrors("Email Atau Password Salah")->withInput();
    	}

    	return redirect()->route('Manganime');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('Manganime');
    }
}
