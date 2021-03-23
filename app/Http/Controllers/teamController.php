<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;

class teamController extends Controller
{
        // addMember
        function addMember() 
        {
          return view('admin.team.addMember');
        }

        // insert_member

        function insert_member(Request $request)
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
       $state = team::insert([
        'image'=> $image_url,
       'name'=>$request-> name,
       'designation'=>$request-> designation,
       'text'=>$request-> text, 
       'fb'=>$request-> fb,
       'twitter'=>$request-> twitter,
       'email'=>$request-> email,
       'linkedin'=>$request-> linkedin,
     ]); 
 
     return back();

    }

    // manageMember
    function manageMember()
    {
     $teamlists = team::all();
    return view('admin.team.manageMember',compact('teamlists'));
    }
   

    //hard delete deleteTeam
    function deleteTeam($id) 
    {
    	team::findOrFail($id)->delete();
    	return back();
    }









 








}
