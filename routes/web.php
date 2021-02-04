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
//add category blade
Route::get('/add_category','employeeController@add_category')->name('add_category');
// add_category insert
Route::post('/insert_cat','employeeController@insert_cat')->name('insert_cat');

//view_category 
Route::get('/view_category','employeeController@view_category')->name('view_category');
//hard delete category
Route::get('/del_cat/{cat_id}','employeeController@del_cat')->name('del_cat');

//add_employee blade
Route::get('/add_employee','employeeController@add_employee')->name('add_employee');
//insert into add_employee
Route::post('/insert_employee','employeeController@insert_employee')->name('insert_employee');

//employee_list blade
Route::get('/employee_list','employeeController@employee_list')->name('employee_list');

//edit_employee blade
Route::get('/edit_employee/{Emp_id}','employeeController@edit_employee')->name('edit_employee');
//update edit_employee
Route::post('update_employee','employeeController@update_employee')->name('update_employee');

//view_employee blade
route::get('/view_employee/{e_id}','employeeController@view_employee')->name('view_employee');
