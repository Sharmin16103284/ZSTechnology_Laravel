<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider ;

class sliderController extends Controller
{
    // addSlider
    function addSlider()
    {
      return view('admin.slider.addSlider');
    }

    // insertSlider
    function insertSlider(Request $request) 
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
       $state = slider::insert([
        'image'=> $image_url,
       'ftitle'=>$request-> ftitle,
       'stitle'=>$request-> stitle,
       'text'=>$request-> text, 
     ]);    
 
     return back();

    }
  
    // manageSlider
    function manageSlider()
    {
      $sliderlists = slider::all();
    	return view('admin.slider.manageSlider',compact('sliderlists'));
    }

    // deleteSlider
    function deleteSlider($id)
    {
    	slider::findOrFail($id)->delete();
    	return back();
    }




}
