<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos;
use App\Http\Livewire\Sales;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/productos', Productos::class);
    Route::get('/ventas', Sales::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});

