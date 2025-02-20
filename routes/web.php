<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('bird-form', \App\Livewire\BirdForm::class);
Route::get('counter', \App\Livewire\Counter::class);
Route::get('lazy', \App\Livewire\Lazy::class)->lazy();
Route::get('bookmarks', \App\Livewire\Bookmark::class);
