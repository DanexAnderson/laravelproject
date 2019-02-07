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

/*Route::get('/', function () {
   return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


*/

Route::get('/', 'PagesController@getDash');

Route::get('/contact', 'PagesController@getContact');

Route::get('/about', 'PagesController@getAbout');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::resource('todo', 'TodosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('listing', 'ListingsController');

Route::get('/albums', 'AlbumsController@index');

Route::get('/albums/create', 'AlbumsController@create');

Route::post('/albums/store', 'AlbumsController@store');

Route::get('/albums/show', 'AlbumsController@show');

Route::get('/albums/showall', 'AlbumsController@showAll');

Route::get('/albums/{id}', 'AlbumsController@showone');

Route::get('/photos/create/{id}', 'PhotosController@create');

Route::resource('photos', 'PhotosController');
