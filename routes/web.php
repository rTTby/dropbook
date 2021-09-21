<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\Http\Controllers\PostController;


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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/donate', 'PagesController@donate');


/*
Route::get('/hello', function () {
    return '<h1>Hello Ruby</h1>';
});

Route::get('/about', function () {
    return view('pages.about');
});
*/

Route::get('/users/{id}', function ($id) {
    return 'this is a user ' . $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'PostsController');

Route::get('/create', 'HomeController@create')->name('create');


Auth::routes();
Route::get('/donate', 'PostsController@create');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', 'PostsController@search')->name('search');
