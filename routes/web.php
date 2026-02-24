<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/servicii/social-media', 'services.social-media')->name('services.social');
Route::view('/servicii/seo', 'services.seo')->name('services.seo');
Route::view('/servicii/creare-site-uri', 'services.creare-site-uri')->name('services.sites');
Route::view('/contact', 'contact')->name('contact');
Route::view('/despre-noi', 'about')->name('about');
Route::view('/termeni-si-conditii', 'legal.terms')->name('legal.terms');
Route::view('/politica-confidentialitate', 'legal.privacy')->name('legal.privacy');
Route::view('/politica-cookie', 'legal.cookies')->name('legal.cookies');
