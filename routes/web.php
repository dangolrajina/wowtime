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

Route::get('/registration','RegistrationController@create')->name('registration');
Route::post('/registration','RegistrationController@store')->name('registration.submit');

Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store');
Route::post('/logout','LoginController@destroy');

Route::get('/welcome','HomeController@index');


Route::get('/features','FeatureController@show');
Route::get('/packages','PackagesController@show');
Route::get('/about-us','AboutController@show');
Route::get('/contact-us','ContactController@show');
Route::get('/advertise-with-us','AdvertiseController@show');
Route::get('/career','CareerController@show');
Route::get('/help-center','HelpCenterController@show');
Route::get('/tos','TosController@show');
Route::get('/privacy-policy','PrivacyController@show');


Route::prefix('admin')->group(function () {
Route::get('/home','HomeController@show')->name('adminhome');
Route::get('/registration','Admin\RegistrationController@create')->name('registration');
Route::post('/registration','Admin\RegistrationController@store')->name('registration.submit');
Route::get('/login','Admin\loginController@index')->name('adminlogin');
Route::post('/login','Admin\loginController@store');
Route::post('/adminlogout','Admin\loginController@destroy');
Route::get('/index','IndexController@show');
Route::get('/channel','Admin\ChannelsController@index');
Route::get('/channel/create','Admin\ChannelsController@create');
Route::post('/channel/create','Admin\ChannelsController@store');
Route::get('/channel/edit/{channel}','Admin\ChannelsController@edit');
Route::patch('/channel/edit/{channel}','Admin\ChannelsController@update');
Route::delete('/channel/delete/{channel}','Admin\ChannelsController@delete');

Route::get('/packages','Admin\AdminPackageController@index');

});
