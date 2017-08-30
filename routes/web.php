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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/templates', 'PagesController@templates');
Route::resource('projects', 'ProjectsController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/gallery', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::get('image/do-upload', 'GalleryController@doImageUpload');