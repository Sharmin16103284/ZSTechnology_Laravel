<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news; 

class newsController extends Controller
{
    //addNews
    function addNews()
    {
      return view('admin.news.addNews');
    }

    // insertNews
    function insertNews(Request $request)
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
       $state = news::insert([
        'image'=> $image_url,
        'date'=>$request-> date, 
       'title'=>$request-> title,
       'name'=>$request-> name,
       'text'=>$request-> text,  
     ]); 
 
     return back();

    }

    // manageNews
    function manageNews()
    {
      $newslists = news::all();
      return view('admin.news.manageNews',compact('newslists'));
    }

    // deleteNews
    function deleteNews($id)
    {
        news::findOrFail($id)->delete();
    	return back();
    }







}
