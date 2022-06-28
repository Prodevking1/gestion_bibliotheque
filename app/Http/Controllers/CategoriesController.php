<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  
    public function index()
    {
        $categories = Categories::all();
        return view ('categories.index')->with('categories', $categories);
    }

    
    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Categories::create($input);
        return redirect('categories.index')->with('flash_message', 'categorie Addedd!');  
    }

    
    public function show(Categories $categories, $id)
    {
        $categories = Categories::find($id);
        return view('categories.show')->with('categories', $categories);
    }

 

    public function edit(Categories $categories, $id)
    {
        $categories = Categories::find($id);
        return view('categories.edit')->with('categories', $categories);
        return redirect('categories.index')->with('flash_message', 'categorie Updated!'); 
    }

    

    public function update(Request $request, Categories $categories, $id)
    {
        $categories = Categories::find($id);
        $input = $request->all();
        $categories->update($input);
        return redirect('categories.index')->with('flash_message', 'categorie Updated!');  
        
    }

  

    public function destroy(Categories $categories, $id)
    {
        Categories::destroy($id);
        return redirect('categorie')->with('flash_message', 'categorie deleted!');
    }
}

?>



