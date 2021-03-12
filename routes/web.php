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
Route::get('/clients', 'PagesController@clients');
Route::get('/team', 'PagesController@team');
Route::get('/careers', 'PagesController@careers');
Route::get('/wolf-pack', 'PagesController@wolfPack');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact-form', 'PagesController@contactForm');
Route::get('/blog', 'PagesController@blog');
Route::get('/blog/posts/{id}', 'PagesController@singleBlogPost');

Route::get('/services/brand-and-identity', 'PagesController@brandIdentity');
Route::get('/services/digital-transformation', 'PagesController@webDesignDevelopment');
Route::get('/services/digital-marketing', 'PagesController@digitalMarketing');
Route::get('/services/ai-and-digital-platforms', 'PagesController@aiDigitalPlatform');

Route::get('/terms-and-conditions', 'PagesController@Terms');
Route::get('/privacy-policy', 'PagesController@Privacy');

Route::get('/works/homely-fresh-foods', 'PagesController@homelyfreshfoods');
Route::get('/works/joot-foods', 'PagesController@jootfoods');
Route::get('/works/north-bay', 'PagesController@northbay');
Route::get('/works/vara-vasthu', 'PagesController@varavasthu');
Route::get('/works/western-valley', 'PagesController@westernvalley');
Route::get('/works/bozmie', 'PagesController@bozmie');
Route::get('/works/tento', 'PagesController@tento');
Route::get('/works/pen', 'PagesController@pen');
Route::get('/works/bodyapp', 'PagesController@bodyapp');
Route::get('/works/kaviya-artistry', 'PagesController@kaviya-artistry');
Route::get('/works/banglore-basket', 'PagesController@banglorebasket');
Route::get('/works/chatur-ideas', 'PagesController@chaturIdeas');
Route::get('/works/tie-chennai', 'PagesController@tie_chennai');
Route::get('/works/it_school', 'PagesController@it_school');
Route::get('/works/wondryears', 'PagesController@wondryears');
Route::get('/works/nfa', 'PagesController@nfa');
Route::get('/works/tbg', 'PagesController@tbg');
Route::get('/works/bcc', 'PagesController@bcc');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'PostsController@viewPosts');
    Route::get('add-post', 'PostsController@addpost');
    Route::post('add-post', 'PostsController@addpostPost');
});
