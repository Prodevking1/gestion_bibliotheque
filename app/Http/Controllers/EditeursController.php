<?php

namespace App\Http\Controllers;

use App\Models\Editeurs;
use Illuminate\Http\Request;

class EditeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editeurs = Editeurs::all();
        return view ('editeurs.index')->with('editeurs', $editeurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editeurs.create');
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
        Editeurs::create($input);
        return redirect('editeur')->with('flash_message', 'Editeurs Addedd!'); 
    }

  
    public function show(Editeurs $editeurs)
    {
        $editeurs = Editeurs::find($id);
        return view('editeurs.show')->with('editeurs', $student);
    }

    
    public function edit(Editeurs $editeurs)
    {
        $editeurs = Editeurs::find($id);
        return view('editeurs.edit')->with('editeurs', $student);
    }

    
    public function update(Request $request, Editeurs $editeurs)
    {
        $editeurs = Editeurs::find($id);
        $input = $request->all();
        $editeurs->update($input);
        return redirect('editeurs')->with('flash_message', 'editeurs Updated!');
    }

 
    public function destroy(Editeurs $editeurs)
    {
        Editeurs::destroy($id);
        return redirect('editeurs')->with('flash_message', 'editeurs deleted!');  
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