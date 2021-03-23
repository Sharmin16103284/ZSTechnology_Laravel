<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonial;

class testimonialController extends Controller
{
    // addTestimonial
    function addTestimonial() 
    {
      return view('admin.testimonial.addTestimonial');
    }

    // insertTestimonial
    function insertTestimonial(Request $request)
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
       $state = testimonial::insert([
        'image'=> $image_url,
       'name'=>$request-> name,
       'address'=>$request-> address,
       'text'=>$request-> text,  
     ]); 
 
     return back();

    }
 
    // manageTestimonial
    function manageTestimonial()
    {
      $testimoniallists = testimonial::all();
      return view('admin.testimonial.manageTestimonial',compact('testimoniallists'));
    }

    // deleteTestimonial
    function deleteTestimonial($id)
    {
      testimonial::findOrFail($id)->delete();
    	return back();
    }
}
