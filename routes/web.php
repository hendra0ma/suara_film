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

Route::get('/tentang', [LandingPage::class,"tentang"])->name('tentang');
Route::get('/detail_film', [LandingPage::class,"detailFilm"])->name('detailFilm');
Route::get('/film', [LandingPage::class,"listFilm"])->name('listFilm');
Route::get('/biodata', [LandingPage::class,"biodata"])->name('biodata');
Route::get('/galeri-biodata', [LandingPage::class,"galeriBiodata"])->name('galeri_biodata');
Route::get('/register-page', function ()
{
    return view('register_page');
});

Route::get('/', [LandingPage::class,"film"])->name('film');
