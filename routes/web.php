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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verify/{token}',  [App\Http\Controllers\Auth\CustomValidationController::class, 'verify'])->name('register.verify');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->middleware('auth')->name('profile.index');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->middleware('auth')->name('profile.update');


/**
 * Admin-panel
 */
Route::middleware(['auth', 'isadmin'])->prefix('admin')->group(function () {
	/**
	 * Books routes
	 */
	Route::resource('books', \App\Http\Controllers\Books\Admin\BookController::class, [
		'except'=>['show'],
		'names'=>'admin.books'
	]);

	/**
	 * Authors routes
	 */
	Route::resource('authors', \App\Http\Controllers\Authors\Admin\AuthorController::class, [
		'except'=>['show'],
		'names'=>'admin.authors'
	]);
});
