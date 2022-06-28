<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\LivresController;
use App\Http\Controllers\AuteursController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/etudiants', [EtudiantsController::class, 'index'])->name('etudiants');
Route::get('/etudiants/create', [EtudiantsController::class, 'create'])->name('etudiants.create');
Route::get('/etudiants/show/{id}', [EtudiantsController::class, 'show'])->name('etudiants.show');
Route::get('/etudiants/edit/{id}', [EtudiantsController::class, 'edit'])->name('etudiants.edit');
Route::post('/etudiants/update/{id}', [EtudiantsController::class, 'update'])->name('etudiants.update');
Route::post('/etudiants/delete/{id}', [EtudiantsController::class, 'destroy'])->name('etudiants.delete');
Route::post('/etudiants/store/', [EtudiantsController::class, 'store'])->name('etudiants.store');

Route::get('/livres', [livresController::class, 'index'])->name('livres');
Route::get('/livres/create', [livresController::class, 'create'])->name('livres.create');
Route::get('/livres/edit/{id}', [livresController::class, 'edit'])->name('livres.edit');
Route::post('/livres/update/{id}', [livresController::class, 'update'])->name('livres.update');
Route::post('/livres/delete/{id}', [livresController::class, 'destroy'])->name('livres.delete');
Route::post('/livres/store/', [livresController::class, 'store'])->name('livres.store');


Route::resource('/auteurs', AuteursController::class);
Route::resource("/categories", CategoriesController::class);

?>