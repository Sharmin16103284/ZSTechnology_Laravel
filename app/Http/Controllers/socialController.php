<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\social;

class socialController extends Controller
{
    // social
    function social()
    {
        return view('admin.social.social');
    }

    // insertSocial

    function insertSocial(Request $request)
    {
        social::insert([
            'fb'=>$request-> fb,
            'twitter'=>$request-> twitter,
            'email'=>$request-> email,
            'linkedin'=>$request-> linkedin,
    	]);

        return back();

    }

    // manageSocial
    function manageSocial()
    {
      $sociallists = social::all();
    	return view('admin.social.manageSocial',compact('sociallists'));
    }

    // deleteSocial
    function deleteSocial($id) 
    {
    	social::findOrFail($id)->delete();
    	return back();
    }




}
