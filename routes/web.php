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
    return view('ideas', [
       
        'ideas' => session()->get('ideas', []),
    ]);
});


Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::post('/ideas', function(){
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/');
});

Route::get('/delete-ideas', function(){
    $ideas = session()->forget('ideas');
    return redirect('/');
});

