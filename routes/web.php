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


Route::get('/', 'PagesController@home');
Route::get('/inventory', 'PagesController@inventory');
Route::get('/carfinder', 'PagesController@carfinder');
Route::get('/applyonline', 'PagesController@applyonline');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/inventory', 'PostsController@inventory');
Route::get('/create', 'PostsController@create');
Route::post('/carfinder/search', 'PostsController@search');
Route::post('/applyonline', 'PostsController@applyonline');
Route::post('/posts/{id}', 'PostsController@imgupload');
Route::get('/search', ['uses' => 'SearchController@search']);
Route::get('/search1', ['uses' => 'SearchController@search1']);		
Route::get('/search2', ['uses' => 'SearchController@search2']);
Route::post('/posts/{id}/add_so',['uses' =>'SpecialOfferController@add']);
Route::post('/contactUs',['uses' =>'PostsController@contactUs']);


Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

