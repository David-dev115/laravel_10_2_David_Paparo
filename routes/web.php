<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongsController;


Route::get('/', [PublicController::class , 'home'] )->name('home');

// rotta rivista e corretta assieme a tutta la logica correlata
Route::get('/songs/create'  , [SongsController::class , 'create'] )->name('songs.create')->middleware('auth');

// rotta rivista e corretta assieme a tutta la logica correlata
Route::post('/songs' , [SongsController::class , 'store'] )->name('songs.store')->middleware('auth');

// rotta rivista e corretta assieme a tutta la logica correlata
Route::get('/songs'  , [SongsController::class , 'index'] )->name('songs.index');


