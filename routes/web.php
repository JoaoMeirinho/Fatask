<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/teste', [TesteController::class, 'getTeste']);
