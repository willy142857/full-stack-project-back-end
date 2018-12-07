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
Route::get('projects/index', 'Api\ProjectsController@index');
Route::get('projects/recent', 'Api\ProjectsController@recentProjects');
Route::get('projects/{project}', 'Api\ProjectsController@show');
Route::get('profile/{user}', 'Api\UserController@show');
Route::get('categories', 'Api\CategoryController@index');

Route::post('login', 'Api\AuthController@login');

Route::post('register', 'Api\AuthController@register');

Route::post('retrievepassword', 'Api\EmailController@sendMail');
Route::patch('resetpassword', 'Api\UserController@resetPassword');

//訂閱 / 取消訂閱
Route::post('subscribe', 'Api\SubscribersController@add');
Route::post('cancelsubscribe', 'Api\SubscribersController@destroy');

Route::middleware('auth:api')->group(function () {
    Route::post('projects', 'Api\ProjectsController@store');
    Route::get('projects/{project}/edit', 'Api\ProjectsController@edit');
    Route::put('projects/{project}', 'Api\ProjectsController@update');
    Route::post('sendSubscriberMail', 'Api\EmailController@sendSubscriptionMail');

    Route::get('profile', 'Api\UserController@index');
    Route::put('profile', 'Api\UserController@update');
    Route::get('profile/projects', 'Api\UserController@showFollowing');
    Route::get('profile/feedbacks', 'Api\UserController@showFollowingFeedbacks');
    Route::get('profile/raisingProjects', 'Api\UserController@showRaising');
    Route::post('following/create', 'Api\FollowingController@store');
    Route::post('raising/create', 'Api\RaisingController@store');
    Route::delete('following', 'Api\FollowingController@destroy');
    Route::delete('raising', 'Api\RaisingController@destroy');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('orders', 'Api\OrderController@store');
    Route::post('comment', 'Api\ProjectsController@comment');
    Route::post('feedback', 'Api\ProjectsController@orderfeedback');
});
