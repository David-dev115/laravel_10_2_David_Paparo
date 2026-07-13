<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongsController;


Route::get('/', [PublicController::class , 'home'] )->name('home');

// rotta rivista e corretta assieme a tutta la logica correlata
Route::get('/songs/create'  , [SongsController::class , 'create'] )->name('songs.create')->middleware('auth');

// riprendere da qui, rivedere compatibilità con convezione Laravel e sistemare la logia correlata:
Route::post('/song/add' , [SongsController::class , 'add'] )->name('add.song')->middleware('auth');

Route::get('/song/index'  , [SongsController::class , 'index'] )->name('song.index');


