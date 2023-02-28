<?php

use App\Http\Controllers\EntryController;
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
Route::get('/', [EntryController::class, 'index']);

//Show Create Page
Route::get('entries/create', [EntryController::class, 'create']);

//Save Book Entry
Route::post('/submit', [EntryController::class, 'submit']);
