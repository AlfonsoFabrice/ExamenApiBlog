<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('inicio', [ApiController::class, 'inicio'])->name('inicio');

Route::get('prueba', [ApiController::class, 'artes'])->name('prueba');

Route::get('Arts', [ApiController::class, 'arts'])->name('arts');

Route::get('Science', [ApiController::class, 'science'])->name('science');

Route::get('World', [ApiController::class, 'world'])->name('world');





Route::get('Api', function () {
    return view('inicioApi');
})->name('inicioApi');

Route::get('Stories', function () {
    return view('vistas.apiStoriesIni');
})->name('apiStories');

