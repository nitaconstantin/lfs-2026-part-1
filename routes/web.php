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

Route::get('/ideas', function(){
    
    $ideas = Idea::all();
    
    
    return view('ideas.index', [
       
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


// show
Route::get('/ideas/{idea}', function(Idea $idea){
    // $idea = Idea::findOrFail($id);

    // $idea = Idea::find($id);
    // if(is_null($idea)){
    //     abort(404);
    // }
    return view('ideas.show',[
        'idea' =>$idea
    ]);
});

// edit
Route::get('/ideas/{idea}/edit', function(Idea $idea){
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// update
Route::patch('/ideas/{idea}', function(Idea $idea){
    $idea->update([
        'description' => request('description')
    ]);

    return redirect('/ideas/' . $idea->id);
});


Route::delete('/ideas/{idea}', function(Idea $idea){
    $idea->delete();
    return redirect('/ideas');
});

// Route::get('/delete-ideas', function(){
//     // $ideas = session()->forget('ideas');
//     Idea::truncate();
//     return redirect('/');
// });

