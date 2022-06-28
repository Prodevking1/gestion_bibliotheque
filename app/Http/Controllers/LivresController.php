<?php

namespace App\Http\Controllers;

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
        $livres = Livres::all();
        return view ('livres.index')->with('livres', $livres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create');
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
        Livres::create($input);
        return redirect('livres')->with('flash_message', 'livre Addedd!');  
    }


    public function show(Livres $livres)
    {
        return view('livres.create');
    }


    public function edit(Livres $livres)
    {
        $input = $request->all();
        Livres::create($input);
        return redirect('livres')->with('flash_message', 'livre Addedd!');  
    }


    public function update(Request $request, Livres $livres)
    {
        $livres = Livres::find($id);
        return view('livres.show')->with('livres', $livres);
    }


    public function destroy(Livres $livres)
    {
        Student::destroy($id);
        return redirect('livrres')->with('flash_message', 'livre deleted!');  
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