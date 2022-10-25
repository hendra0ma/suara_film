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

Route::get('/detail_film', [LandingPage::class,"detailFilm"])->name('detailFilm');
Route::get('/film', [LandingPage::class,"listFilm"])->name('listFilm');
Route::get('/biodata', [LandingPage::class,"biodata"])->name('biodata');
Route::get('/', [LandingPage::class,"film"])->name('film');
