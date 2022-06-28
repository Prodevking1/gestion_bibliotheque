<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use Illuminate\Http\Request;

class AuteursController extends Controller
{
    
    public function index()
    {
        $auteurs = Auteurs::all();
      return view ('auteurs.index')->with('auteurs', $auteurs);
    }

  
    public function create()
    {
        return view('auteurs.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Auteurs::create($input);
        return redirect('auteur')->with('flash_message', 'Auteur Addedd!');  
    }


    public function show(Auteurs $auteurs, $id)
    {
        $auteurs = Auteurs::find($id);
        return view('auteurs.show')->with('auteurs', $auteurs);
    }

 
    public function edit(Auteurs $auteurs, $id)
    {
        $auteurs = Auteurs::find($id);
        return view('auteurs.edit')->with('auteurs', $auteurs);
    }


    public function update(Request $request, Auteurs $auteurs, $id)
    {
        
        $auteurs = Auteurs::find($id);
        $input = $request->all();
        $auteurs->update($input);
        return redirect('auteur')->with('flash_message', 'auteur Updated!');  


      
    }


    public function destroy(Auteurs $auteurs, $id)
    {
        Auteurs::destroy($id);
        return redirect('auteur')->with('flash_message', 'Auteur deleted!');
    }
}

?>