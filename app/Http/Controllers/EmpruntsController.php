<?php

namespace App\Http\Controllers;

use App\Models\Emprunts;
use App\Models\Livres;
use App\Models\Etudiants;

use Illuminate\Http\Request;

class EmpruntsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprunts = Emprunts::all();
        return view('emprunts.index', [
            'emprunts' => Emprunts::Paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emprunts.create',
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
            'date_emprunt' => 'required',
            'date_retour' => 'required',
            'status' => 'N',
        ]);
        $emprunts = Emprunts::create($validatedData);
        $livre = Livres::find($request->livre_id);
        $livre->status = 'N';
        $livre->save();
        return redirect('/emprunts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprunts  $emprunts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show the specified resource
        $emprunt = Emprunts::find($id);
        return view('emprunts.show', [
            'emprunt' => $emprunt,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprunts  $emprunts
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprunts $emprunts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprunts  $emprunts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprunts $emprunts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprunts  $emprunts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprunts $emprunts)
    {
        //
    }
}
