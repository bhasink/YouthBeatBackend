<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/student-register', 'Api\StudentRegister');
    Route::post('/corporate-register', 'Api\CorporateRegister');
    Route::post('internship-register', 'Api\Internship@internship_register');

    Route::get('/get-particular-internship/{id}/{slug}', 'Api\Internship@get_particular_internship');
    Route::get('/get-internship-by-city/{city_id}','Api\Internship@internship_by_city');
    Route::get('/get-city-by-name/{name}','Api\Internship@get_city_by_name');

    Route::get('/get-internship-data','Api\Internship@internship_data');

    Route::get('/get-featured-internship','Api\Internship@get_featured_internship');

