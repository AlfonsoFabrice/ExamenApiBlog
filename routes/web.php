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

Route::get('inicio', [ApiController::class, 'nytApi'])->name('inicio');
Route::get('seeder', [ApiController::class, 'seedBlog'])->name('seeder');
Route::get('blog', [ApiController::class, 'blog'])->name('blog');


Route::get('prueba', [ApiController::class, 'blog'])->name('prueba');








