@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;text-align:center; ">
  <div class="row justify-content-center">
    <div class="col-md-8">
  <h1 style="font-family:Lato;">Enregistrement</h1>
  <div class="card-body">
      
      <form action="{{ url('auteurs') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom et Prénom</label></br>
        <input type="text" name="nom_prenom" id="nom_prenom" class="form-control"></br>
        <input type="submit" value="Enregistrer"  class="btn btn-outline-info"style=" font-family: Stencil Std, fantasy; font-size: 100%;"></br>
    </form>
   
  </div>
</div>
 
@endsection