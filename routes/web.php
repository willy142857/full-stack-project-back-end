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

    Route::get('projects/index', 'ProjectsController@index')->name('projects.index');

    Route::get('projects/create', 'ProjectsController@create')->name('projects.create');

    Route::post('projects', 'ProjectsController@store')->name('projects.store');

    Route::get('projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');

    Route::patch('projects/{project}', 'ProjectsController@update')->name('projects.update');

    Route::delete('projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
