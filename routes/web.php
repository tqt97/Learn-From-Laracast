<?php

use App\Livewire\HomePage;
use App\Livewire\Product\Show;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('home'))->name('home');
// Route::get('/products/{id}', Show::class)->name('products.show');
Route::get('/products/{id}', fn () => view('product.show'))->name('products.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
