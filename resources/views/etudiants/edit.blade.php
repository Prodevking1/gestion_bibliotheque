@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modification</div>
  <div class="card-body">
      <form action="{{ url('etudiants/' .$etudiants->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$etudiants->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="id" value="{{$etudiants->nom}}" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="id" value="{{$etudiants->prenom}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="nombre" name="age" id="id" value="{{$etudiants->age}}" class="form-control"></br>
        <label>Genre</label></br>
        <input type="text" name="genre" id="id" value="{{$etudiants->genre}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="id" value="{{$etudiants->email}}" class="form-control"></br>
        <label>Contact</label></br>
        <input type="nombre" name="tel" id="id" value="{{$etudiants->tel}}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="id" value="{{$etudiants->adresse}}" class="form-control"></br>
        <label>Filiere</label></br>
        <input type="text" name="filiere" id="id" value="{{$etudiants->filiere}}" class="form-control"></br>
        <label>Classe</label></br>
        <input type="text" name="classe" id="id" value="{{$etudiants->classe}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection