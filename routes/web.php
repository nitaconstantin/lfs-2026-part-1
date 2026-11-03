<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\DB;
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

Route::view('/about', 'about');
Route::view('/contact', 'contact');
// index
Route::get('/ideas', [IdeaController::class, 'index']);
// create
Route::get('/ideas/create', [IdeaController::class, 'create']);
// store
Route::post('/ideas/create', [IdeaController::class, 'store']);
// show
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
// edit
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
// update
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
// destroy
Route::delete('/ideas/{idea}',[IdeaController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::delete('/logout', [SessionsController::class, 'destroy']);
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);



