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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index')->name('Acceuil');
Route::get('/index', 'PagesController@acceuil');
Route::get('/cosmetic', 'PagesController@cosmetic');
Route::get('/electronic', 'PagesController@electronic');




Route::group(['middleware' => ['auth']],function(){
    Route::get('/admin', 'PagesController@administration');
    Route::get('/cat-create', 'CategoryController@addCategory');
    Route::get('/cat-view', 'CategoryController@viewCategories');
    Route::post('/cat-create', 'CategoryController@addCategory');
    Route::match(['get','post'],'/cat-edit{id}', 'CategoryController@editCategory');
    Route::match(['get','post'],'/cat-delete{id}', 'CategoryController@deleteCategory');

});
