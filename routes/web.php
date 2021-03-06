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
Route::get('/',function (){
    return view('welcome');
});



Route::get('image','ImageController@index');

Route::post('image','ImageController@store');

//Route::group(['prefix'=>'admin'],function(){

//    Route::get('/','AdminController@index');
//    Route::get('product','AdminController@index');
//    Route::get('product/create','AdminController@index');
//    Route::get('product/edit','AdminController@index');

//});


Route::get('login','AdminController@login');

//Route::get('user','UserController@index');
//Route::get('user/show/{id}','UserController@show');
//Route::get('user/create','UserController@create');
//Route::post('user','UserController@store');
//Route::edit('user/edit/{id}','UserController@edit');
//Route::put('user/{id}','UserController@update');
//Route::delete('user/{id}','UserController@destroy');



Route::resource('/student','StudentController');

Route::get('test','StudentController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'],function () {

    Route::get('admin','AdminController@index');

});



