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

//Show All Entries
Route::get('/', function () {
    return view('index');
});

//Show Create Page
Route::get('entries/create', function() {
    return view('create');
});

//Save Book Entry
Route::post('/submit', function() {
    return redirect('/');
});
