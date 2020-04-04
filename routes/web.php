<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome','HomeController@index');
Route::get('/adminhome','HomeController@show')->name('adminhome');
Route::get('/adminlogin','AdminController@create')->name('adminlogin');
Route::post('/adminlogin','AdminController@store');
Route::post('/adminlogout','AdminController@destroy');

Route::get('/features','FeatureController@show');
Route::get('/packages','PackagesController@show');
Route::get('/about-us','AboutController@show');
Route::get('/contact-us','ContactController@show');
Route::get('/advertise-with-us','AdvertiseController@show');
Route::get('/career','CareerController@show');
Route::get('/help-center','HelpCenterController@show');
Route::get('/tos','TosController@show');
Route::get('/privacy-policy','PrivacyController@show');
