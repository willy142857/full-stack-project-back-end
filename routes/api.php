<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('projects', 'Api\ProjectsController@index');

Route::get('projects/{project}', 'Api\ProjectsController@show');

Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::get('sendmail','Api\EmailController@sendMail');

Route::middleware('auth:api')->group(function (){
    Route::post('projects', 'Api\ProjectsController@store');
    Route::put('projects/{project}', 'Api\ProjectsContsroller@update');
    
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('orders', 'Api\OrderController@store');

});

