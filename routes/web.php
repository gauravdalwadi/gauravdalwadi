<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register wxeb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});


//admin panel
// Route::get('/app', function () {
//     return view('layouts.admin');
// });


// Route::get('/lex', function () {
//     return view('loginT');
// });
// Route::get('/reg', function () {
//     return view('registerT');
// });
// Route::get('/res', function () {
//     return view('resetT');
// });
// Route::get('/emT', function () {
//     return view('emailT');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

//to submit contact forms
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
