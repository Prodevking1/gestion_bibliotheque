<?php

namespace App\Http\Controllers;

use App\Models\Editeurs;
use Illuminate\Http\Request;

class EditeursController extends Controller
{
  
    public function index()
    {
        $editeurs = Editeurs::all();
        return view ('editeurs.index')->with('editeurs', $editeurs);
       
    }

    
    public function create()
    {
        return view('editeurs.create'); 
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Editeurs::create($input);
        return redirect('editeurs')->with('flash_message', 'editeur Addedd!');  
    }

    
    public function show(Editeurs $editeurs, $id)
    {
        $editeurs = Editeurs::find($id);
        return view('editeurs.show')->with('editeurs', $editeurs);
    }

 

    public function edit(Editeurs $editeurs, $id)
    {
        $editeurs = Editeurs::find($id);
        return view('editeurs.edit')->with('editeurs', $editeurs);
        return redirect('editeurs')->with('flash_message', 'editeur Updated!'); 
    }

    

    public function update(Request $request, Editeurs $editeurs, $id)
    {
        $editeurs = Editeurs::find($id);
        $input = $request->all();
        $editeurs->update($input);
        return redirect('editeurs')->with('flash_message', 'editeur Updated!');  
        
    }

  

    public function destroy(Editeurs $editeurs, $id)
    {
        editeurs::destroy($id);
        return redirect('editeurs')->with('flash_message', 'editeur deleted!');
    }
}

?>



