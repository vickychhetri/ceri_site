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


Route::get('vision', function () {
    return view('vision');
});
Route::get('mission', function () {
    return view('mission');
});
Route::get('PHD-Programme', function () {
    return view('phdprogramme');
});
Route::get('Publication', function () {
    return view('publication');
});
Route::get('IPR', function () {
    return view('ipr');
});
Route::get('Student-Projects', function () {
    return view('studentprojects');
});
Route::get('How-to-Approach', function () {
    return view('howtoapproach');
});
Route::get('Research-databases', function () {
    return view('researchdatabases');
});

Route::get('/Surveys', function () {
    return view('surveys');
});
Route::get('CloneJournals', function () {
    return view('cloneJournal');
});
// Route::get('dashboard', function () {
   
//     return view('dashboard');
//  });
 Route::get('Login', function () {
   
    return view('login');
 });
 
// ptivare area

// Route::get('Add-News', function () {
  // return view('addnews');
//});

Route::get('Research-Funding-Agencies', function () {
    return view('funding');
});


Route::get("Research-Activities","App\Http\Controllers\FullController@researchopen");
Route::get('News/{filename}', 'App\Http\Controllers\FullController@showsinglenews');


Route::get("/","App\Http\Controllers\FullController@index");

Route::post("savelatestnews","App\Http\Controllers\LatestnewsController@store");
Route::post("CheckLogin","App\Http\Controllers\FullController@Check");


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
