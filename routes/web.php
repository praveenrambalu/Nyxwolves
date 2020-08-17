<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@homePage');
Route::get('/about', 'PagesController@aboutPage');
Route::get('/services', 'PagesController@services');
Route::get('/works', 'PagesController@works');
Route::get('/wolf-pack', 'PagesController@wolfPack');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact-form', 'PagesController@contactForm');
Route::get('/blog', 'PagesController@blog');
Route::get('/blog/posts/{id}', 'PagesController@singleBlogPost');

Route::get('/services/brand-and-identity','PagesController@brandIdentity');
Route::get('/services/digital-transformation','PagesController@webDesignDevelopment');
Route::get('/services/digital-marketing','PagesController@digitalMarketing');
Route::get('/services/ai-and-digital-platforms','PagesController@aiDigitalPlatform'); 

Route::get('/terms-and-conditions','PagesController@Terms');
Route::get('/privacy-policy','PagesController@Privacy');

Route::get('/works/homely-fresh-foods','PagesController@homelyfreshfoods');
Route::get('/works/joot-foods','PagesController@jootfoods');
Route::get('/works/north-bay','PagesController@northbay');
Route::get('/works/vara-vasthu','PagesController@varavasthu');
Route::get('/works/western-valley','PagesController@westernvalley');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/','PostsController@viewPosts');
    Route::get('add-post','PostsController@addpost');
    Route::post('add-post','PostsController@addpostPost');
});