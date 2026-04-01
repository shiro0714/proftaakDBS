<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LibraryController;

use App\Http\Controllers\SongController;

use App\Http\Controllers\NieuweSingleController;

use App\Http\Controllers\ProftaakController;

use App\Http\Controllers\BezoekerController;

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
Route::get('/bezoekers', [BezoekerController::class, 'index'])->name('bezoekers.index');
Route::put('/bezoekers/{id}', [BezoekerController::class, 'update'])->name('bezoekers.update');