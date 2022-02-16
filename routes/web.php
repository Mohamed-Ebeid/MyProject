<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/about', 'App\Http\Controllers\PageController@goToAbout');
Route::get('/services', 'App\Http\Controllers\PageController@goToServices');
Route::get('/home', 'App\Http\Controllers\PageController@goToHome');

/*
Route::get('/about', function () {
    return view('Pages.about'); 
});
*/


Route::get('/users/{id}', function ($id) {
    return '<h1> This is user number : ' .$id ; 
});

Route::resource('posts' , 'App\Http\Controllers\PostsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
