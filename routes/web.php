<?php

use Illuminate\Support\Facades\Route;

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
});

Route::resource('user','users');

Route::resource('product','productControler')->middleware('checkAuth');

 

  Route::get('Login','users@login');

  Route::post('doLogin','users@logicLogin');


  Route::get('Logout','users@logout');