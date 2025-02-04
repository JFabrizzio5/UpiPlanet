<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\Home;
use App\Http\Controllers\Horario;

Route::get('/s', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/', [Home::class, 'index']);

Route::get('/Menu', function () {
    return view('HomePage');
});

Route::get('/Horario', function () {
    return view('Horario');
});
