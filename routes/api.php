<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Auther', 'middleware'=>'auth:api'], function($router){
    $router->get('/users', 'StaffController@index');
    $router->post('/user-store', 'StaffController@store');
    $router->delete('/user-delete/{user}', 'StaffController@delete');
    $router->get('/user/{user}', 'StaffController@show');
    $router->patch('/user-edit/{user}', 'StaffController@edit');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
