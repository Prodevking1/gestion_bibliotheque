<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\AuteursController;
use App\Http\Controllers\LivresController;
use App\Http\Controllers\EmpruntsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EditeursController;
use App\Models\Etudiants;
use App\Models\Emprunts;
use App\Models\Livres;

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


//routes etudiants
Route::get('/etudiants', [EtudiantsController::class, 'index'])->name('etudiants');
Route::get('/etudiants/create', [EtudiantsController::class, 'create'])->name('etudiants.create');
Route::get('/etudiants/show/{id}', [EtudiantsController::class, 'show'])->name('etudiants.show');
Route::post('/etudiants/edit/{id}', [EtudiantsController::class, 'edit'])->name('etudiants.edit');
Route::post('/etudiants/update/{id}', [EtudiantsController::class, 'update'])->name('etudiants.update');
Route::post('/etudiants/delete/{id}', [EtudiantsController::class, 'destroy'])->name('etudiants.delete');
Route::post('/etudiants/store/', [EtudiantsController::class, 'store'])->name('etudiants.store');



// routes livres
Route::get('/livres', [livresController::class, 'index'])->name('livres');
Route::get('/livres/create', [livresController::class, 'create'])->name('livres.create');
Route::get('/livres/show/{id}', [LivresController::class, 'show'])->name('livres.show');
Route::post('/livres/edit/{id}', [livresController::class, 'edit'])->name('livres.edit');
Route::post('/livres/update/{id}', [livresController::class, 'update'])->name('livres.update');
Route::post('/livres/delete/{id}', [livresController::class, 'destroy'])->name('livres.delete');
Route::post('/livres/store/', [livresController::class, 'store'])->name('livres.store');

// routes emprunts
Route::get('/emprunts', [EmpruntsController::class, 'index'])->name('emprunts');
Route::get('/emprunts/create', [EmpruntsController::class, 'create'])->name('emprunts.create');
Route::get('/emprunts/show/{id}', [EmpruntsController::class, 'show'])->name('emprunts.show');
Route::post('/emprunts/edit/{id}', [EmpruntsController::class, 'edit'])->name('emprunts.edit');
Route::post('/emprunts/update/{id}', [EmpruntsController::class, 'update'])->name('emprunts.update');
Route::post('/emprunts/delete/{id}', [EmpruntsController::class, 'destroy'])->name('emprunts.delete');
Route::post('/emprunts/store/', [EmpruntsController::class, 'store'])->name('emprunts.store');

// routes notifications
Route::get('/notifications/emprunts', [NotificationsController::class, 'emprunts'])->name('notifications.emprunts');
Route::get('/notifications/reservations', [NotificationsController::class, 'reservation'])->name('notifications.reservation');

// routes ressources
Route::resource('/auteurs', AuteursController::class);
Route::resource("/categories", CategoriesController::class);
Route::resource("/editeurs", EditeursController::class);


// route to send mail
Route::get('notifications/send-emprunt/{id}', function ($id) {
    $emprunt = Emprunts::find($id);
    $etudiant = Etudiants::find($id);
    $data = [
        'etudiant' => $etudiant,
        'emprunt' => $emprunt,

    ];
    Mail::send('notifications.message_emprunt', $data, function ($message) use ($etudiant) {
        $message->from('rachid@micro-net.tech');
        $message->to($etudiant->email);
        $message->subject('[ Important ] - Retour de votre emprunt ');
    });
    dd($etudiant);
  
});
?>