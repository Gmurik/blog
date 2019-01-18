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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// работа с постами
Route::get('post/list','PostController@postList');
Route::get('post/{id?}','PostController@post')->where('id','[1-9]+');
Route::get('post/add','PostController@addPost');
Route::post('post/add','PostController@addPost');

//работа с авторизацией
Route::get('user/create','AuthController@showCreateUserForm');
Route::post('user/create','AuthController@createUser');

Route::get('user/login','AuthController@showLoginUserForm');
Route::post('user/login','AuthController@loginUser');








