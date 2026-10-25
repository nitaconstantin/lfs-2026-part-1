<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     //return 'About us';
//     return view('about');
    
// });

// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::view('/', 'welcome');

Route::get('/', function(){
    return view('welcome', [
        'greeting' =>'Hello ',
        'person' => request('person', 'world!'),
    ]);
});


Route::view('/about', 'about');
Route::view('/contact', 'contact');

