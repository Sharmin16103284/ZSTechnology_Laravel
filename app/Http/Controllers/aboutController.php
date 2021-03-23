<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutPage;
use App\aboutSecondPart;



class aboutController extends Controller
{
    // add new About info 
    function addAbout()
    {
      return view('admin.about.about');
    }

    // insert_about
    function insert_about(Request $request) 
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
       $state = aboutPage::insert([
        'image'=> $image_url,
       'headline'=>$request-> headline,
       'mtext'=>$request-> mtext, 
     ]); 
 
     return back();

    }
     
    // manageAbout first part and second part
    function manageAbout()
    {
      $lists = aboutPage::all();
      $seccondlists = aboutSecondPart::all();
    	return view('admin.about.manageAbout',compact('lists','seccondlists'));
    }



    // insert_about_secondPart
    function insert_about_secondPart(Request $request)
    {
      $state = aboutSecondPart::insert([
       'sheadline'=>$request-> sheadline,
       'text'=>$request-> text,
       ]); 
 
     return back();
    } 

    
    // editBottomAbout
    function editBottomAbout($id)
    {
      $seccondedits = aboutSecondPart::findOrFail($id);
    	return view('admin.about.editBottomAbout',compact('seccondedits'));
    }


    // updateBottomAbout
    function updateBottomAbout(Request $request)
    {
    
        aboutSecondPart::findOrFail($request->id)->update([
          'sheadline'=>$request-> sheadline,
          'text'=>$request-> text,
    	]); 

    	return back();
    }
 
    //hard delete deleteAbout
    function deleteAbout($ab_id)
    {
    	aboutPage::findOrFail($ab_id)->delete();
    	return back();
    }
    // deleteBottomAbout
    function deleteBottomAbout($id)
    {
    	aboutSecondPart::findOrFail($id)->delete();
    	return back();
    }


    // end
}
