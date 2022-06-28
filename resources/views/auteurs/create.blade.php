@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Enregistrement</div>
  <div class="card-body">
      
      <form action="{{ url('auteurs') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom et Prénom</label></br>
        <input type="text" name="nom_prenom" id="nom_prenom" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection