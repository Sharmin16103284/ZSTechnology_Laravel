<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviceCategory;
use App\service;
use App\serviceImage;

class serviceController extends Controller
{
    // addServiceCategory
    function addServiceCategory()
    {
      $serviceCategoryLists = serviceCategory::all();
      return view('admin.service.addServiceCategory',compact('serviceCategoryLists'));
    }

    //insertServiceCat 
    function insertServiceCat(Request $request)
    { 
    	serviceCategory::insert([
    		'service'=>$request-> service,
    	]);
    	return back();
    }

    // deleteServiceCat
    function deleteServiceCat($id)
    {
      serviceCategory::findOrFail($id)->delete();
    	return back();
    }


    // addService
    function addService()
    {
      $serviceCategoryLists = serviceCategory::all();
      return view('admin.service.addService',compact('serviceCategoryLists'));
    }

    //insert into insertService
    function insertService(Request $request)
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
        $state = service::insert([
    		'serviceId'=>$request-> serviceId,
    		'mtitle'=>$request-> mtitle,
    		'stitle'=>$request-> stitle,
    		'text'=>$request-> text,
    		'image'=> $image_url,
    	]); 

    	return back();
    } 

    // manageService
    function manageService()
    {
      $serviceLists = service::all();
      return view('admin.service.manageService',compact('serviceLists'));
    }

    // deleteService
    function deleteService($id)
    {
      service::findOrFail($id)->delete();
    	return back();
    }

    // addServiceImage
    function addServiceImage()
    {
      $edits = serviceImage::all();
      return view('admin.service.addServiceImage',compact('edits'));
    }

    // insertServiceImage
    function insertServiceImage(Request $request)
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
        $state = serviceImage::insert([
    		'image'=> $image_url,
    	]); 

    	return back();
    } 

    // editServiceImage
    

    // updateServiceImage
    function updateServiceImage(Request $request) 
    {
    	$old_img = $request->old_image; //taking the old image address
    	//image insert
    	  $image= $request->file('image'); //('image') is form field name
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/admin/image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name); 

       //end

        unlink($old_img); //deleting old image

        //whole form insert in db
        serviceImage::findOrFail($request->id)->update([
          'image'=> $image_url,
    	]); 

    	return back();
    }





}
