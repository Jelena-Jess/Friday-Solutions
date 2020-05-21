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

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');
Route::get('/projects', 'PagesController@projects');
Route::get('/project1', 'PagesController@project1');
Route::get('/project2', 'PagesController@project2');
Route::get('/project3', 'PagesController@project3');
Route::get('/project3', 'PagesController@project3');
Route::get('/website', 'PagesController@website');
Route::get('/logo', 'PagesController@logo');
Route::get('/about', 'PagesController@about');
Route::get('/content', 'PagesController@content');
Route::get('/blog/coding', 'PagesController@blog_coding');
Route::get('/blog/design', 'PagesController@blog_design');
Route::get('/blog/inspiration', 'PagesController@blog_inspiration');

Route::get('/contact', 'EmailController@home');
Route::post('/send', 'EmailController@send');
Route::get('/project_plan', 'EmailController@project_plan');
Route::post('/project_plan_send', 'EmailController@project_plan_send');

Route::resource('posts', 'PostsController');
