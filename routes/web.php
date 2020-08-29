<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::group(['prefix'=>'admin' , 'middleware' =>['auth','IsAdmin']],function(){
    // Post Route
    Route::get('/post','PostController@index');
    Route::get('post/create','PostController@create');
    Route::post('post/create','PostController@store');
    Route::get('post/{id}','PostController@show');
    Route::get('post/{id}/edit','PostController@edit');
    Route::post('post/{id}/edit','PostController@update');
    Route::get('post/{id}/delete','PostController@destroy');

    // Category Route
    Route::get('/category','CategoryController@index');
    Route::get('/category/create','CategoryController@create');
    Route::post('/category/create','CategoryController@store');
    Route::get('/category/{id}','CategoryController@show');
    Route::get('/category/{id}/edit','CategoryController@edit');
    Route::post('/category/{id}/edit','CategoryController@update');
    Route::get('/category/{id}/delete','CategoryController@destroy');
});

Route::group(['prefix'=>'admin/users', 'middleware' => 'IsAdmin'],function(){
    // User Route
    Route::get('/','UserController@index');
    Route::get('/{id}/edit','UserController@edit');
    Route::post('/{id}/edit','UserController@update');
    Route::get('/{id}/delete','UserController@destroy');
});

    // NormalUser Route
    Route::get('/post','NomalUserController@index');
    Route::get('/post/{id}','NomalUserController@show');



Route::group(['prefix' => 'admin'],function(){
    Route::get('/role','RoleController@index');
});














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
