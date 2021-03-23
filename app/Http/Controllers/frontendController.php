<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\aboutPage;
use App\team;
use App\gallery;
use App\aboutSecondPart;
use App\slider;
use App\portfolio; 
use App\testimonial;
use App\news;
use App\serviceCategory;
use App\service;
use App\serviceImage;
use App\social;
use App\logo;



class frontendController extends Controller
{

    // index
    function userIndex()
    {
        $portfoliolists = portfolio::all();
        $testimoniallists = testimonial::all();
        $sliders = slider::all(); 
        $newslists = news::all();
        $serviceCategoryLists = serviceCategory::all();
        $edits = serviceImage::all();
        $contact = contact::all();
        $sociallists = social::all();
        $logos = logo::all();
        return view('frontend.pages.index',compact('testimoniallists','portfoliolists','sliders' , 'newslists', 'serviceCategoryLists' , 'edits', 'contact' , 'sociallists','logos'));
    }

 
    // about
    function aboutUs()
    {
        $lists = aboutPage::all();
        $seccondlists = aboutSecondPart::all();
        $serviceCategoryLists = serviceCategory::all();
        $logos = logo::all();
        $sociallists = social::all();
        $contact = contact::all();
    	return view('frontend.pages.about_us',compact('lists','seccondlists','serviceCategoryLists', 'sociallists','logos', 'contact'));
    }

    // contact_us
    function contact_us()
    {
        $contact = contact::all();
        $serviceCategoryLists = serviceCategory::all();
        $logos = logo::all();
        $sociallists = social::all();
        $contact = contact::all();
    	return view('frontend.pages.contact_us',compact('contact','serviceCategoryLists', 'sociallists','logos', 'contact')); 
    }

    // gallery
    function gallery()
    {
        $gallerylists = gallery::all();
        $serviceCategoryLists = serviceCategory::all();
        $logos = logo::all();
        $sociallists = social::all();
        $contact = contact::all();
    	return view('frontend.pages.gallery',compact('gallerylists','serviceCategoryLists', 'sociallists','logos', 'contact')); 
    }

    // our_team
    function our_team()
    {
        $teamlists = team::all();
        $serviceCategoryLists = serviceCategory::all();
        $logos = logo::all();
        $sociallists = social::all();
        $sociallists = social::all();
        $contact = contact::all();
        return view('frontend.pages.our_team',compact('teamlists','serviceCategoryLists', 'sociallists','logos', 'contact'));
    }

    // portfolios
    function portfolios()
    {
        $portfolios = portfolio::all();
        $serviceCategoryLists = serviceCategory::all();
        $logos = logo::all();
        $sociallists = social::all();
        $contact = contact::all();
        return view('frontend.pages.portfolios',compact('portfolios','serviceCategoryLists', 'sociallists','logos', 'contact'));
    }

    // filtered services
    // servicesView
    function servicesView($id)
    {
        $serviceCategoryLists = serviceCategory::all();
        $service = service::where('serviceId', $id)-> get();
        $logos = logo::all();
        $sociallists = social::all();
        $contact = contact::all();
        return view('frontend.pages.services', compact('service','serviceCategoryLists', 'sociallists','logos', 'contact')); 
    }



    // end
}
 