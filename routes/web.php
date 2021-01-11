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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/web-design-and-development', 'PagesController@website')->name('website');
Route::get('/logo-design', 'PagesController@logo')->name('logo');
Route::get('/about-us', 'PagesController@about')->name('about');
Route::get('/content-management', 'PagesController@content')->name('content');
Route::get('/blog-Information', 'PagesController@blog_coding')->name('blog.development');
Route::get('/blog-Preparation', 'PagesController@blog_design')->name('blog.design');
Route::get('/blog-Miscellaneous', 'PagesController@blog_inspiration')->name('blog.inspiration');

Route::resource('posts', 'PostsController');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::get('contact-project', 'ContactWithProjectInfoController@create')->name('contactproject.create');
Route::post('contact-project', 'ContactWithProjectInfoController@store')->name('contactproject.store');

Route::post('/', 'SubscribeController@store')->name('subscribe.store');
