<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LibraryController;

use App\Http\Controllers\SongController;

use App\Http\Controllers\NieuweSingleController;

use App\Http\Controllers\ProftaakController;

use App\Http\Controllers\BezoekerController;

use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', [DemoController::class, 'show']);
Route::get('/home', [HomeController::class, 'show'])->name('home');
Route::get('/library', [LibraryController::class, 'show'])->name('library');
Route::get('/songs', [SongController::class, 'show'])->name('songs');
Route::get('/nieuwe-single', [NieuweSingleController::class, 'show'])->name('nieuwe-single');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::get('/proftaak', [ProftaakController::class, 'show'])->name('proftaak');
// 1. Eerst de specifieke login routes
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
// Voeg deze regel toe onder de login routes
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 2. Dan de beveiligde groep
Route::middleware(['auth'])->group(function () {
    Route::get('/bezoekers', [BezoekerController::class, 'index'])->name('bezoekers.index');
    Route::get('/bezoekers/create', [BezoekerController::class, 'create'])->name('bezoekers.create');
    Route::post('/bezoekers', [BezoekerController::class, 'store'])->name('bezoekers.store');
    
    // 3. De route met {id} MOET als laatste van de 'bezoekers' routes
    Route::put('/bezoekers/{id}', [BezoekerController::class, 'update'])->name('bezoekers.update');
});
