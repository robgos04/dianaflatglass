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

// Public page
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'showProject'])->name('show.project');
Route::get('/career', [App\Http\Controllers\Controller::class, 'showCareer'])->name('show.career');
Route::get('/disclaimer', [App\Http\Controllers\Controller::class, 'showDisclaimer'])->name('show.disclaimer');
Route::get('/terms-of-use', [App\Http\Controllers\Controller::class, 'showTerms'])->name('show.terms');
Route::get('/privacy-policy', [App\Http\Controllers\Controller::class, 'showPrivacy'])->name('show.privacy');
Route::get('/contact-us', [App\Http\Controllers\Controller::class, 'showContact'])->name('show.contact');

// Admin projects
Route::prefix('admin')->group(function () {
    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'adminIndex'])->name('admin.projects.index');
    Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{project}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});
