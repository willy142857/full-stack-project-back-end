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
    return redirect('dashboard.index');
});

//for test
Route::get('/index', function() {
    return view('projects.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::get('newMail', 'Api\EmailController@index')->name('emails.index');

    Route::delete('newMail/{subscriber}', 'Api\EmailController@destroy')->name('emails.destroy');

    Route::post('sendNewMail', 'Api\EmailController@sendSubscriptionMail')->name('emails.sendSub');

    Route::post('sendProjectEndMail', 'Api\EmailController@sendEndProjectMail')->name('emails.sendEnd');

    Route::get('projects/index', 'ProjectsController@index')->name('projects.index');

    Route::get('projects/create', 'ProjectsController@create')->name('projects.create');

    Route::post('projects', 'ProjectsController@store')->name('projects.store');

    Route::get('projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');

    Route::patch('projects/{project}', 'ProjectsController@update')->name('projects.update');

    Route::delete('projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');

    Route::get('users/index', 'UsersController@index')->name('users.index');

    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');

    Route::post('users', 'UsersController@store')->name('users.store');

    Route::patch('users/{user}', 'UsersController@update')->name('users.update');

    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');

    Route::get('orders/index', 'OrdersController@index')->name('orders.index');

    Route::get('orders/{order}/edit', 'OrdersController@edit')->name('orders.edit');

    Route::post('orders', 'OrdersController@store')->name('orders.store');

    Route::patch('orders/{order}', 'OrdersController@update')->name('orders.update');

    Route::delete('orders/{order}', 'OrdersController@destroy')->name('orders.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
