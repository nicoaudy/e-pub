<?php

Route::get('/', 'MainController@index');

// Authentication routes...
Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth:Customer'], function(){
    Route::get('/addProduct/{productId}', 'CartController@addItem');
    Route::get('/removeItem/{productId}', 'CartController@removeItem');
    Route::get('/cart', 'CartController@showCart');

    Route::post('/checkout', 'OrderController@checkout');
    Route::get('order/{orderId}', 'OrderController@viewOrder');
    Route::get('order', 'OrderController@index');
    Route::get('download/{orderId}/{filename}', 'OrderController@download');
});

Route::group(['middleware' => 'auth:Admin', 'prefix' => 'admin'], function() {
    {
        Route::get('product/new', 'ProductController@newProduct');
        Route::get('products', 'ProductController@index');
        Route::get('product/destroy/{id}', 'ProductController@destroy');
        Route::post('product/save', 'ProductController@add');
    }
});