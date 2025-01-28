<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\Home;

Route::get('/s', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/', [Home::class, 'index']);

Route::get('/Menu', function () {
    return view('HomePage');
});
