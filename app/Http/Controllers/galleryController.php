<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\gallery;

class galleryController extends Controller
{
    // addImage
    function addImage()
    {
      return view('admin.gallery.addImage');
    }

    // insert_image
    function insert_image(Request $request)
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
       $state = gallery::insert([ 
        'image'=> $image_url,
       'title'=>$request-> title,
     ]); 
 
     return back();

    }

    // manageImage
    function manageImage()
    {
      $gallerylists = gallery::all();
    	return view('admin.gallery.manageImage',compact('gallerylists')); 
    }

    

    // deleteImage 
    function deleteImage($id)
    {
    	gallery::findOrFail($id)->delete();
    	return back();
    }





    // end
}
