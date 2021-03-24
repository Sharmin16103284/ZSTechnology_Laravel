<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
	function index()
	{
		return view('index');
	}

    function login()
    {
    	return view('admin/login');
    }

    function registration()
    {
    	return view('admin/registration');
    }
    //registration insert
    function reg_insert(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]); 

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return back();
    }
}
