<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;



class contactController extends Controller
{
    /// add new contact info
    function addContact() 
    {
      return view('admin.contact.contact');
    } 

    // insertContact
    function insertContact(Request $request)
    {
      contact::insert([
    		'address'=>$request-> address,
        'fphone'=>$request-> fphone,
        'sphone'=>$request-> sphone,
        'email'=>$request-> email,
    	]);
    	return back();
    }

    // manageContact 
    function manageContact()
    {
      $contactlists = contact::all();
    	return view('admin.contact.manageContact',compact('contactlists'));
    }

    // editContact
    function editContact($cont_id)
    {
      $editcontacts = contact::findOrFail($cont_id);
    	return view('admin.contact.editContact',compact('editcontacts'));
    }

    // updateContact
    function updateContact (Request $request)
    {
      contact::findOrFail($request->id)->update([ 
        'address'=>$request-> address,
        'fphone'=>$request-> fphone,
        'sphone'=>$request-> sphone,
        'email'=>$request-> email,
    ]); 
    return back();

    }

    //hard delete deleteContact
    function deleteContact($id) 
    {
    	contact::findOrFail($id)->delete();
    	return back();
    }



    // end

}
