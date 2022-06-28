<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        
        return view('etudiants.index', [
            'etudiants' => Etudiants::Paginate(5)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiants.create');

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
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'genre' => 'required',
            'filiere' => 'required',
            'niveau' => 'required',
            'adresse' => 'required',
        ]);
        $etudiants = Etudiants::create($validatedData);
        return redirect('/etudiants')->with('success', 'Etudiant ajouté avec succès');  

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiants $etudiants, $id)
    {

        $etudiants = Etudiants::find($id);
        return view('etudiants.show')->with('etudiants', $etudiants);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiants $etudiants, $id)
    {
        $etudiants = Etudiants::find($id);
        return view('etudiants.edit')->with('etudiants', $etudiants);
        return redirect('etudiant')->with('flash_message', 'etudiant Updated!'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiants $etudiants, $id)
    {
        $etudiants = Etudiants::find($id);
        $input = $request->all();
        $etudiants->update($input);
        return redirect('etudiants')->with('flash_message', 'etudiants Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $etudiants = Etudiants::where('id', $id);
       $etudiants->delete();
        return redirect()->back()->with("Dossier ajouter avec succes");

    }
}