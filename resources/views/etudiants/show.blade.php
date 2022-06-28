@extends('etudiants.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Read</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $etudiants->nom }}</h5>
        <h5 class="card-title">Prenom : {{ $etudiants->prenom }}</h5>
        <h5 class="card-title">Age : {{ $etudiants->age }}</h5>
        <h5 class="card-title">Genre : {{ $etudiants->genre }}</h5>
        <h5 class="card-title">Email : {{ $etudiants->email }}</h5>
        <h5 class="card-title">Contact : {{ $etudiants->tel }}</h5>
        <h5 class="card-title">Adresse : {{ $etudiants->adresse }}</h5>
        <h5 class="card-title">Filiere : {{ $etudiants->filiere }}</h5>
        <h5 class="card-title">Classe : {{ $etudiants->classe }}</h5>

  </div>
       
    </hr>
  
  </div>
</div>