<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Post;
use App\Http\Controllers\PostDatatablesController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Auth\LoginController;
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
Route::get('/redirect', [LoginController::class,'redirectToProvider']);
Route::get('/callback', [LoginController::class,'handleProviderCallback']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/artisan',function(){
//        Artisan::call('migrate');
//        Artisan::call('vendor:publish',['--tag'=>'laravel-assets','--ansi'=>true,'--force'=>true]);
        Artisan::call('vendor:publish',['--tag'=>'datatables','--ansi'=>true,'--force'=>true]);
//        Artisan::call('package:discover',['--ansi'=>true]);
//        Artisan::call('vendor:publish',['--provider'=>"Intervention\Image\ImageServiceProviderLaravelRecent"]);


    });


    Route::get('/home', [Home::class,'show'])->name('home.index');

    Route::get('/', function (){
        return view('offline');});

    /**
     * Hakkımda
     */
    Route::get('about-me',[Home::class,'ShowAboutMe'])->name('about-me');
    Route::get('contact-me',[Home::class,'ShowContactMe'])->name('contact-me');

    /**
     * Post Viewer
     */
    Route::get('view-post/{post_name}/{post_id}',[Post::class,'ShowPost'])->name('show.post');




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
             * Post Comments
             */
            Route::post('/post_comments_add', [Post::class,'PostCommentSave'])->name('post.comment.save');


        /**
         * Admin Panel Action
         */
        Route::get('/dashboard', function() {return view('admin.dashboard');})->name('dashboard');

        Route::get('/create_post', function() {return view('admin.post.create_post');})->name('admin.post.create');
        Route::post('/create_post', [Post::class,'PostCreate'])->name('admin.post.controller');
        Route::get('/update_post/{id}',[Post::class,'GetPostUpdateData'])->name('admin.post.update');
        Route::post('/update_post/{id}', [Post::class,'PostUpdate'])->name('admin.post.update');
        Route::post('/delete_post', [Post::class,'PostDelete'])->name('admin.post.delete');

        /**
         * Create About Page and Post
         */
        Route::get('/create_aboutme', [About::class,'show'])->name('admin.aboutme.controller');
        Route::post('/create_aboutme', [About::class,'SaveAboutMe'])->name('admin.aboutme.controller');


        Route::get('/edit_profile',[Admin::class,'GetProfile'])->name('admin.profile.controller');
        Route::post('/save_profile_changes',[Admin::class,'SaveProfileChanges'])->name('ajax.profile');

        Route::get('/post_list',[Post::class,'GetPostList'])->name('admin.post.list');
        Route::post('/datatables/post_list',[PostDatatablesController::class,'getDatatablesPost'])->name('datatables.post.list');
    });
});
