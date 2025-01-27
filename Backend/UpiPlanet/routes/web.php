<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\Home;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/home', [Home::class, 'index']);