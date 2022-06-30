<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Models\Auteurs;
use App\Models\Etudiants;
use App\Models\Categories;
use App\Models\Editeurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservations.index', [
            'reservations' => Reservations::all()

        ]);
    }


    public function create()
    {
        return view('reservations.create',
        ['etudiants' => Etudiants::latest()->get(),
       
        'livres' => Livres::latest()->get()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Reservations::create($input);
        return redirect('reservations')->with('flash_message', 'reservation Addedd!'); 
    }

  
    public function show(Reservations $reservations, $id)
    {
        $editeurs = Editeurs::find($id);
        return view('reservations.show')->with('reservations', $student);
    }

    
    public function edit(Reservations $reservations, $id)
    {
        $reservations = Reservations::find($id);
        return view('reservations.edit')->with('reservations', $reservations);
    }

    
    public function update(Request $request, Reservations $reservations, $id)
    {
        $reservations = Reservations::find($id);
        $input = $request->all();
        $reservations->update($input);
        return redirect('reservations')->with('flash_message', 'editeurs Updated!');
    }

 
    public function destroy(Reservations $reservations, $id)
    {
        Reservations::destroy($id);
        return redirect('reservations')->with('flash_message', 'reservations deleted!');  
    }
}
