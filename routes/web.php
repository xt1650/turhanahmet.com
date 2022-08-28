<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/home', [Home::class,'show'])->name('home.index');
    Route::get('/', function (){return view('offline');});

    /**
     * Hakkımda
     */
    Route::get('about-me',[Home::class,'ShowAboutMe'])->name('about-me');
    Route::get('contact-me',[Home::class,'ShowContactMe'])->name('contact-me');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [Register::class,'show'])->name('register.show');
        Route::post('/register', [Register::class,'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/signin', [Login::class,'show'])->name('login.show');
        Route::post('/signin', [Login::class,'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'Logout@perform')->name('logout.perform');






        /**
         * Admin Panel Action
         */
        Route::get('/dashboard', function() {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/create_post', function() {
            return view('admin.post.create_post');
        })->name('admin.post.create');

        Route::post('/create_post', [Post::class,'PostCreate'])->name('admin.post.controller');
        Route::get('/create_aboutme', [About::class,'show'])->name('admin.aboutme.controller');
        Route::post('/create_aboutme', [About::class,'SaveAboutMe'])->name('admin.aboutme.controller');
    });
});
