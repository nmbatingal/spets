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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Route::get('/login', 'HomeController@login');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {

    /*** My Performance ***/
    Route::get('/performance/individual', 'PerformanceController@index')->name('performance.individual');
    Route::get('/performance/individual/{id}/record', 'PerformanceController@show')->name('performance.showRecord');
    Route::get('/performance/individual/create', 'PerformanceController@create')->name('performance.create');
    Route::post('/performance/individual/store', 'PerformanceController@store')->name('performance.store');

    Route::group(['middleware' => 'admin'], function() {
        // ACCOUNTS
        Route::get('/accounts/users', 'UsersController@index')->name('users.index');            // user
        Route::get('/accounts/users/{id}', 'UsersController@show')->name('users.show'); // show user
        Route::get('/accounts/users/update/{id}', 'UsersController@update')->name('users.update'); // update user
        Route::post('/accounts/users/status', 'UsersController@changeStatus')->name('users.switchStatus'); // switch user status
        Route::post('/accounts/users/admin', 'UsersController@changeAdmin')->name('users.switchAdmin'); // switch user admin
        Route::post('/accounts/users/reset', 'UsersController@resetPassword')->name('users.reset'); // reset user password
        Route::get('/accounts/groups', 'GroupsController@index')->name('accounts.groups');      // group
        Route::post('/accounts/groups/store', 'GroupsController@store')->name('accounts.group.store'); // store new group
    });
    
});
