<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portfolio; 

class portfolioController extends Controller
{
    // addPortfolio
    function addPortfolio()
    {
      return view('admin.portfolio.addPortfolio');
    }

    // insertPortfolio
    function insertPortfolio(Request $request)
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
       $state = portfolio::insert([
        'image'=> $image_url,
       'mtitle'=>$request-> mtitle,
       'stitle'=>$request-> stitle,
       'text'=>$request-> text,  
     ]); 
 
     return back();

    }

    // managePortfolio
    function managePortfolio()
    {
      $portfoliolists = portfolio::all();
      return view('admin.portfolio.managePortfolio',compact('portfoliolists'));
    }

    // deletePortfolio
    function deletePortfolio($id)
    {
      portfolio::findOrFail($id)->delete();
    	return back();
    }


}
 