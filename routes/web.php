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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/projects', 'PagesController@projects')->name('portfolio');
Route::get('/project1', 'PagesController@project1');
Route::get('/project2', 'PagesController@project2');
Route::get('/project3', 'PagesController@project3');
Route::get('/website', 'PagesController@website')->name('website');
Route::get('/logo', 'PagesController@logo')->name('logo');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/content', 'PagesController@content')->name('content');
Route::get('/blog/coding', 'PagesController@blog_coding')->name('blog.coding');
Route::get('/blog/design', 'PagesController@blog_design')->name('blog.design');
Route::get('/blog/inspiration', 'PagesController@blog_inspiration')->name('blog.inspiration');

// Route::get('/contact', 'EmailController@home');
// Route::post('/send', 'EmailController@send');
// Route::get('/project_plan', 'EmailController@project_plan');
// Route::post('/project_plan_send', 'EmailController@project_plan_send');

Route::resource('posts', 'PostsController');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::get('contact_project', 'ContactWithProjectInfoController@create')->name('contactproject.create');
Route::post('contact_project', 'ContactWithProjectInfoController@store')->name('contactproject.store');