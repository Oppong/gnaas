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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@index');
Route::get('/alumni','PagesController@alumni');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/gallery','PagesController@gallery');
Route::get('/blog','PagesController@blog');
Route::get('/giving','PagesController@giving');



Route::resource('sendemail', 'SendEmailController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function(){

    // Route::get('login', 'AdminController@login');
    Route::get('manage', 'HomeController@manage')->name('admin.manage')->middleware('is_admin');
    Route::resource('slider', 'Admin\SliderController');
    Route::resource('upcoming', 'Admin\UpcomingEventsController');
    
});