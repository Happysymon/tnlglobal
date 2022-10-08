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

// Route::get('/', function () {
//     return view('home');
// });


// Home
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

// Search
// Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search');
Route::get('/search', 'App\Http\Controllers\HomeController@search')->name('search');

Route::post('/search-post', 'App\Http\Controllers\HomeController@search_post')->name('search-post');

// jobs
Route::get('/browse-jobs', 'App\Http\Controllers\JobsController@index')->name('jobs');
Route::get('/job/{slug}', 'App\Http\Controllers\JobsController@job')->name('job');

// Blog
Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name('blog');
Route::get('/post/{slug}', 'App\Http\Controllers\BlogController@post')->name('post');

// Get By category
Route::get('/blog/{categor}', 'App\Http\Controllers\BlogController@category')->name('blog-category');

// Get By Tag
//Route::get('/blog/{tag}', 'App\Http\Controllers\BlogController@tag')->name('blog-tag');

// about
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');

// FAQ
Route::get('/faq', 'App\Http\Controllers\FaqController@index')->name('faq');

// Contact
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
Route::post('/postmsg', 'App\Http\Controllers\ContactController@postmsg')->name('postmsg');

// Submit Cv
Route::get('/submit-resume', 'App\Http\Controllers\CvController@index')->name('resume');
Route::post('/postresume', 'App\Http\Controllers\CvController@postcv')->name('postresum');

// subscribe
Route::post('/subscribe', 'App\Http\Controllers\SubscribeController@index')->name('subscribe');

// privacy-policy
Route::get('/privancy-policy', function () {
    return view('privancy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
