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



Route::get('/home',[
    'uses'  =>  'ProductController@getIndex',
])->name('home');

Route::get('/',[
    'uses'  =>  'ProductController@getIndex',
    'as'    =>  'product.index'
]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'UserController@getSignin'
]);

Route::group(['prefix' => 'user'], function(){
    Route::group(['middleware'  =>  'guest'], function(){
        Route::get('/signup', [
            'uses'  =>  'UserController@getSignup',
            'as'    =>  'user.signup'
        ]);

        Route::post('/signup', [
            'uses'  =>  'UserController@postSignup',
            'as'    =>  'user.signup'
        ]);

        Route::get('/signin', [
            'uses'  =>  'UserController@getSignin',
            'as'    =>  'user.signin'
        ]);

        Route::post('/signin', [
            'uses'  =>  'UserController@postSignin',
            'as'    =>  'user.signin'
        ]);
    });

    Route::group(['middleware'  =>  'auth'], function(){
        Route::get('/profile', [
            'uses'  =>  'UserController@getProfile',
            'as'    =>  'user.profile'
        ]);

        Route::post('/logout', [
            'uses'  =>  'UserController@getLogout',
            'as'    =>  'user.logout'
        ]);
    });

});

