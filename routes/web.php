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
//main page
Route::get('/', function () {
    return view('main');
})->name('main');

// posts
Route::group(['prefix' => 'post'], function () {

    Route::get('/list','PostController@postList')
    ->name('blog.post.list');

    Route::get('/{id?}','PostController@post')->where('id','[1-9]+')
    ->name('blog.post.single');

    Route::get('/add','PostController@addPost')
    ->name('blog.post.showCreateForm');

    Route::post('/add','PostController@addPost')
    ->name('blog.post.sendNewPost');

});

//auth
Route::group(['prefix' => 'user'], function () {

    Route::get('/create','AuthController@showCreateUserForm')
    ->name('blog.user.showCreateNewUserForm');

    Route::post('/create','AuthController@createUser')
    ->name('blog.user.createNewUser');

    Route::get('/login','AuthController@showLoginUserForm')
    ->name('blog.user.showAuthForm');

    Route::post('/login','AuthController@loginUser')
    ->name('blog.user.authUser');

});

//feedback
Route::get('/feedback','@')
    ->name('blog.others.showFeedbackForm');

Route::post('/feedback','@')
    ->name('blog.others.sendFeedback');

//AboutMe
Route::get('/about-me','@')
    ->name('blog.others.aboutMe');













