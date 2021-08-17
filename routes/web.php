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

Route::get('/', 'Controller@showHome')->name('show.home');
Route::get('/formGallery','Controller@showForm')->name('show.gallery');
Route::post('/inputGallery','Controller@inputImageGallery')->name('input.imageGallery');
Route::get('/sendMail','Controller@sendEmail')->name('send.email');
