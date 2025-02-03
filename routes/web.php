<?php

use App\Livewire\AddBuku;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-buku', AddBuku::class);