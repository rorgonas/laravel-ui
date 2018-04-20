<?php

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

// Main routing
Route::get('/', 'MainController@show');
Route::get('/templates', 'TemplatesController@show');
Route::get('/design-guide', 'DesignGuideController@show');

// Sample Templates
Route::get('/home', 'HomePageController@show');
Route::get('/about', 'AboutPageController@show');
Route::get('/contact', 'ContactPageController@show');
Route::get('/mv-stars', 'StarsPageController@show');

// Sample 3D Gallery
Route::get('/gallery', 'GalleryPageController@show');