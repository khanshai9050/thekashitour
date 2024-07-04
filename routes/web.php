<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'frontend.index')->name('website.home');
Route::view('/home', 'frontend.index')->name('website.home');
Route::view('/about-us', 'frontend.about')->name('website.about');
Route::view('/contact-us', 'frontend.contact')->name('website.contact');
Route::view('/book-us', 'frontend.booking')->name('website.booking');
Route::view('/gallery', 'frontend.gallery')->name('website.gallery');
Route::view('/login', 'frontend.login')->name('website.login');
Route::view('/package1', 'frontend.package1')->name('website.package1');
Route::view('/travelbooking', 'frontend.travelbooking')->name('website.travelbooking');
Route::view('/walkingtour', 'frontend.walkingtour')->name('website.walkingtour');
Route::view('/term', 'frontend.term')->name('website.term');
Route::view('/ricepudding', 'frontend.ricepudding')->name('website.ricepudding');
Route::view('/roombooking', 'frontend.roombooking')->name('website.roombooking');
Route::view('/room1', 'frontend.room1')->name('website.room1');
