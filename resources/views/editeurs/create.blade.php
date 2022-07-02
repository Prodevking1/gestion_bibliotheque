@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Ajouter un Editeur</div>
  <div class="card-body">
      
      <form action="{{ url('editeurs') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom:</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection