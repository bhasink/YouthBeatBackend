<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//list
Route::get('/internship/list','AdminController@internship_list');
//create
Route::get('/internship/create','AdminController@internship_create');
Route::post('/internship/create','AdminController@internship_create_save');
//edit
Route::get('/internship/edit/{id}','AdminController@internship_update');
Route::post('/internship/edit','AdminController@internship_update_save');
//featured
Route::get('/internship/featured-internship','AdminController@featured_internship');
Route::post('/internship/featured-internship','AdminController@featured_internship_update');
//delete
Route::get('/internship/delete/{id}','AdminController@internship_delete');
//leads
Route::get('/corporate-register','AdminController@corporate_register');
Route::get('/student-register','AdminController@student_register');
Route::get('/internship-register','AdminController@internship_register');
Route::get('/selective-internship-register','AdminController@selective_internship_register');
//fetch selective internships
Route::post('/selective-internship-register','AdminController@fetch_selective_internship');