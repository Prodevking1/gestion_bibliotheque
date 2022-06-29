<?php

namespace App\Http\Controllers;

use App\Models\Auteurs;
use App\Models\Categories;
use App\Models\Editeurs;
use App\Models\Livres;
use Illuminate\Http\Request;

class LivresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livres.index', [
            'livres' => Livres::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create',
         ['categories' => Categories::latest()->get(),
         'auteurs' => Auteurs::latest()->get(),
         'editeurs' => Editeurs::latest()->get()
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
            'titre' => 'required',
            'isbn' => 'required',
            'categorie_id' => 'required',
            'auteur_id' => 'required',
            'editeur_id' => 'required',
            'status' => 'Y'
        ]);
        $livres = Livres::create($validatedData);
        
        return view('livres.index', [
         'livres' => Livres::latest()->get(),
         'categories' => Categories::latest()->get(),
         'auteurs' => Auteurs::latest()->get(),
         'editeurs' => Editeurs::latest()->get()
        ])->with('success', $livres);    
    }


    public function show(Livres $livres, int $id)
    {  
        $livre = Livres::find($id);
        return view('livres.show', [
            'livre' => $livre,
            'auteurs' => Auteurs::latest()->get(),
            'categories' => Categories::latest()->get(),
            'editeurs' => Editeurs::latest()->get()
        ]);
    }


    public function edit(Livres $livres)
    {
        return view('livres.create',
         ['categories' => Categories::latest()->get(),
         'auteurs' => Auteurs::latest()->get(),
         'editeurs' => Editeurs::latest()->get()
        ]);
    }


    public function update(Request $request, Livres $livres)
    { 
        $livre = Livres::find($livres->id);
        $livre->update($request->all());
    }


    public function destroy(Livres $livres)
    {
        
    }
}







/*<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Student;
 
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }
 
    
    public function create()
    {
        return view('students.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');  
    }
 
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
 
    
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
 
  
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }
 
   
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }
}*/