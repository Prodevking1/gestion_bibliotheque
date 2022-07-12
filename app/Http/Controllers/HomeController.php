<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import all controllers from
use App\Http\Controllers\Controller;
use App\Models\Etudiants;
use App\Models\Livres;
use App\Models\Emprunts;
use App\Models\Reservations;
use App\Models\Auteurs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // cunt all items in the
        return view('home', 
        [
        'livres' => Livres::count(),
        'reservations' => Reservations::count(),
        'etudiants' => Etudiants::count(),
        'emprunts' => Emprunts::count(),
        'auteurs' => Auteurs::count(),
        ]);
    }
}
