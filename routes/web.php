<?php

use App\Http\Controllers\LandingPage;
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

Route::get('/film', [LandingPage::class,"listFilm"])->name('list_film');
Route::get('/biodata', [LandingPage::class,"index"])->name('home');
Route::get('/', [LandingPage::class,"film"])->name('film');
