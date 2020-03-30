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
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//View All Post
Route::get('Post','PostController@ViewPost')->name('post.all');

//View List User with comment on post create by user @index
//View comment @show
//Create  Comment @Store
Route::resource('Comment','CommentController');


Route::group(['middleware' => ['web','auth']], function()    
{
	Route::get('/home', 'PostController@index')->name('home');
	//View Content Post Dari User
    Route::resource('Content-Post','PostController');
    
    //View Comment Guest
    Route::get('Guest-Comment','CommentController@Guestcomments')->name('guest.comment');

});

