<?php

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

Route::get('/', function(){
    // $ideas = DB::table('ideas')->get();
    // $ideas = Idea::all();
    // $ideas = Idea::where('state', 'pending')->get();
    $ideas = Idea::query()
            ->when(request('state'), function($query, $state){
                $query->where('state', $state);
               
            })
            ->get();
    return view('ideas', [
       
        'ideas' => $ideas,
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

