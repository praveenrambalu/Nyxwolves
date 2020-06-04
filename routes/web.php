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



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@homePage');
Route::get('/about', 'PagesController@aboutPage');
Route::get('/services', 'PagesController@services');
Route::get('/works', 'PagesController@works');
Route::get('/wolf-pack', 'PagesController@wolfPack');
Route::get('/contact', 'PagesController@contact');

Route::get('/services/brand-and-identity','PagesController@brandIdentity');
Route::get('/services/web-design-and-development','PagesController@webDesignDevelopment');
Route::get('/services/digital-marketing','PagesController@digitalMarketing');
Route::get('/services/ai-and-digital-platforms','PagesController@aiDigitalPlatform'); 