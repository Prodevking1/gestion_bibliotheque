@extends('etudiants.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enregistrement</div>
  <div class="card-body">
      
      <form action="{{ url('etudiants') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom </label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom </label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>Age </label></br>
        <input type="nombre" name="age" id="age" class="form-control"></br>
        <label>Genre </label></br>
        <input type="text" name="genre" id="genre" class="form-control"></br>
        <label>Email </label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Contact </label></br>
        <input type="nombre" name="tel" id="tel" class="form-control"></br>
        <label>Adresse </label></br>
        <input type="text" name="adresse" id="adresse" class="form-control"></br>
        <label>Filiere </label></br>
        <input type="text" name="filiere" id="filiere" class="form-control"></br>
        <label>Classe </label></br>
        <input type="text" name="classe" id="classe" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop 