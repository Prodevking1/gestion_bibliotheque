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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('register');

Route::get('/etudiants', [EtudiantsController::class, 'index'])->name('etudiants');
Route::get('/etudiants/create', [EtudiantsController::class, 'create'])->name('etudiants.create');
Route::get('/etudiants/edit/{id}', [EtudiantsController::class, 'edit'])->name('etudiants.edit');
Route::post('/etudiants/update/{id}', [EtudiantsController::class, 'update'])->name('etudiants.update');
Route::post('/etudiants/delete/{id}', [EtudiantsController::class, 'destroy'])->name('etudiants.destroy');
Route::post('/etudiants/store/', [EtudiantsController::class, 'store'])->name('etudiants.store');
