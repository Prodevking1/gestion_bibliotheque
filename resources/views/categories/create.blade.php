@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Ajouter une Categorie</div>
  <div class="card-body">
      
      <form action="{{ url('categories') }}" method="post">
        {!! csrf_field() !!}
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection