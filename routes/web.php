<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongsController;


Route::get('/', [PublicController::class , 'home'] )->name('home');


Route::get('/songs/create'  , [SongsController::class , 'create'] )->name('songs.create')->middleware('auth');

Route::post('/songs' , [SongsController::class , 'store'] )->name('songs.store')->middleware('auth');

Route::get('/songs'  , [SongsController::class , 'index'] )->name('songs.index');

Route::get('/songs/{song}', [SongsController::class, 'show'])->name('songs.show');

Route::get('/songs/{song}/edit' , [SongsController::class, 'edit'] )->name('songs.edit');

Route::put('/songs/{song}', [SongsController::class, 'update']) ->name('songs.update');

Route::delete('/songs/{song}' , [SongsController::class, 'destroy'] )->name('songs.destroy');

