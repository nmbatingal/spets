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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {

    /*** My Performance ***/
    Route::get('/performance/individual', 'PerformanceController@index')->name('performance.individual');
    Route::get('/performance/individual/{id}/record', 'PerformanceController@show')->name('performance.showRecord');
    Route::get('/performance/individual/create', 'PerformanceController@create')->name('performance.create');
    Route::post('/performance/individual/store', 'PerformanceController@store')->name('performance.store');

    // ACCOUNTS
    Route::get('/accounts/users', 'UsersController@index')->name('accounts.users');			// user
    Route::get('/accounts/users/{id}', 'UsersController@show')->name('accounts.get.user'); // store new group
    Route::post('/accounts/users/store', 'UsersController@store')->name('accounts.user.store'); // store new group
    Route::get('/accounts/groups', 'GroupsController@index')->name('accounts.groups');		// group
    Route::post('/accounts/groups/store', 'GroupsController@store')->name('accounts.group.store'); // store new group
});
