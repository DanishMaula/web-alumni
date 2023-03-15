<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\ArticleController;

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
    return redirect('/home');
});

Route::get('/siswa', [siswaController::class, 'index'])->name('siswa.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');

Route::post('/siswa/create/success', [siswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/delete/success/{id}', [siswaController::class, 'destroy'])->name('siswa.delete');

Route::put('/siswa/update/success/{id}', [siswaController::class, 'update'])->name('siswa.update');


