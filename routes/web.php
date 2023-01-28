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

Route::get('/default', function () {
    return view('templates.default');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//User, Role, Permission
Route::get('/users','UserController@index');
//Route::get('/roles','RoleController@index');
Route::get('/roles', function () {
    return view('roles.index');
});

//Route::get('/permissions','PermissionsController@index');
Route::get('/permissions', function () {
    return view('permissions.index');
});
