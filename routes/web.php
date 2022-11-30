<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('frontend.index'); });
Route::get('contact', function () { return view('frontend.contact'); });

Auth::routes();

// User Panel

Route::get('profile/{name}',  'Frontend\UserController@profile');
Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');


// Vendor Brand
Route::namespace('Vendor')->prefix('vendor')->name('vendor.')->group(function(){
    Route::get('dashboard', 'DashboardController@index');
});



// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});


// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});
