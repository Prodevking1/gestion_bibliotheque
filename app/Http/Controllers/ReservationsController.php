<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use App\Models\Livres;
use App\Models\Etudiants;

use Illuminate\Http\Request;

class reservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = reservations::all();
        return view('reservations.index', [
            'reservations' => reservations::Paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create',
    [
        'livres' => Livres::where('status', 'Y')->get(),
        'etudiants' => Etudiants::latest()->get(),
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
        $validatedData = $request->validate([
            'etudiant_id' => 'required',
            'livre_id' => 'required',
            'date_reservation' => 'required',
            'date_retour' => 'required',
            'status' => 'N',
        ]);
        $reservations = Reservations::create($validatedData);
        $livre = Livres::find($request->livre_id);
        $livre->status = 'N';
        $livre->save();
        return redirect('/reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
