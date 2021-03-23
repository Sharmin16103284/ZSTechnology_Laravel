<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;

class logoController extends Controller
{
    //logo
    function logo()
    {
        return view('admin.logo.logo');
    }

    // insertLogo
    function insertLogo(Request $request)
    {
    	$request->validate([
    	 	'image' => 'required|mimes:jpg,jpeg,png,JPG',
    	 ]);

    	//image insert
    	$image= $request->file('image'); //('image') is form field name
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/admin/image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);

       //end

        //whole form insert in db
        $state = logo::insert([
    		'image'=> $image_url,
    	]); 

    	return back();
    } 

    // manageLogo
    function manageLogo()
    {
        $logos = logo::all();
        return view('admin.logo.manageLogo',compact('logos'));
    }

    // deleteLogo
    function deleteLogo($id)
    {
        logo::findOrFail($id)->delete();
    	return back();
    }
    





}
