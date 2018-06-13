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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

/**STAFF**/
Route::get('/staff', 'StaffController@index')->name('staff');
Route::get('/add_staff', 'StaffController@add')->name('add_staff');
Route::post('/staff', 'StaffController@store')->name('store_staff');
Route::get('/staff/{id}/show', 'StaffController@show');
Route::get('/staff/{id}/edit', 'StaffController@edit')->name('edit_staff');;
Route::patch('/staff/update/{id}', 'StaffController@update')->name('update_staff');
Route::delete('/staff/delete/{id}', 'StaffController@destroy');
