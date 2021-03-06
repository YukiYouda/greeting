<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return '<h1>Hello from route</h1>';
});

Route::get('comments/{time}', [App\Http\Controllers\GreetController::class, 'greet']);

Route::get('comments/freeword/{word}', [App\Http\Controllers\GreetController::class, 'word']
);
