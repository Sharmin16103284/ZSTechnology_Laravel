<?php

use Illuminate\Support\Facades\Route; 

//login----------
Route::get('/login','loginController@login')->name('login');
//registration
Route::get('/registration','loginController@registration')->name('registration');
//registration insert
Route::post('/reg_insert','loginController@reg_insert')->name('reg_insert'); 

//login register home
Route::get('/index','loginController@index')->name('index');


Route::get('/', function () {
    return view('admin\dashboard');
});


// =========== contact=============

// add new contact info
Route::get('/addContact','contactController@addContact')->name('addContact');
// insert into contact table
Route::post('/insertContact','contactController@insertContact')->name('insertContact');
// manageContact
Route::get('/manageContact','contactController@manageContact')->name('manageContact');
// editContact
Route::get('/editContact/{cont_id}','contactController@editContact')->name('editContact');
//update updateContact 
Route::post('/updateContact','contactController@updateContact')->name('updateContact');
// delete about
Route::get('/deleteContact/{id}','contactController@deleteContact')->name('deleteContact');


// ================= about=========
// add new about info
Route::get('/addAbout','aboutController@addAbout')->name('addAbout');
// insert into about table
Route::post('/insert_about','aboutController@insert_about')->name('insert_about');
// insert_about_secondPart
Route::post('/insert_about_secondPart','aboutController@insert_about_secondPart')->name('insert_about_secondPart');
// manageAbout
Route::get('/manageAbout','aboutController@manageAbout')->name('manageAbout');

// editBottomAbout
Route::get('/editBottomAbout/{id}','aboutController@editBottomAbout')->name('editBottomAbout');

// updateBottomAbout
Route::post('/updateBottomAbout','aboutController@updateBottomAbout')->name('updateBottomAbout');
// delete about
Route::get('/deleteAbout/{ab_id}','aboutController@deleteAbout')->name('deleteAbout');
// deleteBottomAbout
Route::get('/deleteBottomAbout/{id}','aboutController@deleteBottomAbout')->name('deleteBottomAbout');


// ============ team ================

// add team member 
Route::get('/addMember','teamController@addMember')->name('addMember');
// insert into insert_member table
Route::post('/insert_member','teamController@insert_member')->name('insert_member');
// manageMember
Route::get('/manageMember','teamController@manageMember')->name('manageMember');

// delete about
Route::get('/deleteTeam/{id}','teamController@deleteTeam')->name('deleteTeam');


// ================ gallery ================= 

// addImage
Route::get('/addImage','galleryController@addImage')->name('addImage');
// insert into insert_member table
Route::post('/insert_image','galleryController@insert_image')->name('insert_image');
// manageImage
Route::get('/manageImage','galleryController@manageImage')->name('manageImage');

// deleteImage
Route::get('/deleteImage/{id}','galleryController@deleteImage')->name('deleteImage');


// ==========portfolio==============
 
// addPortfolio
Route::get('/addPortfolio','portfolioController@addPortfolio')->name('addPortfolio');
// insertPortfolio
Route::post('/insertPortfolio','portfolioController@insertPortfolio')->name('insertPortfolio');
// managePortfolio
Route::get('/managePortfolio','portfolioController@managePortfolio')->name('managePortfolio');
// deletePortfolio
Route::get('/deletePortfolio/{id}','portfolioController@deletePortfolio')->name('deletePortfolio');


// =========== service ============
// addServiceCategory
Route::get('/addServiceCategory','serviceController@addServiceCategory')->name('addServiceCategory');
// insertServiceCat
Route::post('/insertServiceCat','serviceController@insertServiceCat')->name('insertServiceCat');
// deleteServiceCat
Route::get('/deleteServiceCat/{id}','serviceController@deleteServiceCat')->name('deleteServiceCat');
// addService
Route::get('/addService','serviceController@addService')->name('addService');
// insertService
Route::post('/insertService','serviceController@insertService')->name('insertService');
// manageService
Route::get('/manageService','serviceController@manageService')->name('manageService');
// deleteService
Route::get('/deleteService/{id}','serviceController@deleteService')->name('deleteService');

// service image for user index page
// addServiceImage
Route::get('/addServiceImage','serviceController@addServiceImage')->name('addServiceImage');
// insertServiceImage
Route::post('/insertServiceImage','serviceController@insertServiceImage')->name('insertServiceImage');
// updateServiceImage
Route::post('/updateServiceImage','serviceController@updateServiceImage')->name('updateServiceImage');






// ============testimonial==========
// addTestimonial
Route::get('/addTestimonial','testimonialController@addTestimonial')->name('addTestimonial');
// insert into insertTestimonial
Route::post('/insertTestimonial','testimonialController@insertTestimonial')->name('insertTestimonial');
// manageTestimonial
Route::get('/manageTestimonial','testimonialController@manageTestimonial')->name('manageTestimonial');
// deleteTestimonial
Route::get('/deleteTestimonial/{id}','testimonialController@deleteTestimonial')->name('deleteTestimonial');



// ============ news =================
// addNews
Route::get('/addNews','newsController@addNews')->name('addNews');
// insertNews 
Route::post('/insertNews','newsController@insertNews')->name('insertNews');
// manageNews
Route::get('/manageNews','newsController@manageNews')->name('manageNews');
// deleteNews
Route::get('/deleteNews/{id}','newsController@deleteNews')->name('deleteNews');







// =========slider=============
// addSlider
Route::get('/addSlider','sliderController@addSlider')->name('addSlider');
// insert into insertSlider
Route::post('/insertSlider','sliderController@insertSlider')->name('insertSlider');
// manageSlider
Route::get('/manageSlider','sliderController@manageSlider')->name('manageSlider');

// deleteSlider
Route::get('/deleteSlider/{id}','sliderController@deleteSlider')->name('deleteSlider');



// ========= social ==========
// social
Route::get('/social','socialController@social')->name('social');
//insertSocial
Route::post('/insertSocial','socialController@insertSocial')->name('insertSocial');
// manageSocial
Route::get('/manageSocial','socialController@manageSocial')->name('manageSocial');
// deleteSocial
Route::get('/deleteSocial/{id}','socialController@deleteSocial')->name('deleteSocial');


// =========== logo ===========
// logo
Route::get('/logo','logoController@logo')->name('logo');
//insertLogo
Route::post('/insertLogo','logoController@insertLogo')->name('insertLogo');
// manageLogo
Route::get('/manageLogo','logoController@manageLogo')->name('manageLogo');
// deleteLogo
Route::get('/deleteLogo/{id}','logoController@deleteLogo')->name('deleteLogo');





// ============= fontend ===================



// frontend index
Route::get('/userIndex','frontendController@userIndex')->name('userIndex');

// filter service
// servicesView
Route::get('/servicesView/{id}','frontendController@servicesView')->name('servicesView');

// about
Route::get('/aboutUs','frontendController@aboutUs')->name('aboutUs');

// blog
Route::get('/blog','frontendController@blog')->name('blog');


// contact_us
Route::get('/contact_us','frontendController@contact_us')->name('contact_us');

// gallery
Route::get('/gallery','frontendController@gallery')->name('gallery');

// our_team
Route::get('/our_team','frontendController@our_team')->name('our_team');

// portfolios
Route::get('/portfolios','frontendController@portfolios')->name('portfolios');