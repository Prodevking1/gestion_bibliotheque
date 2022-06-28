@extends('auteurs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Modification</div>
  <div class="card-body">
      <form action="{{ url('auteurs/' .$auteurs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$auteurs->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nom_prenom" id="id" value="{{$auteurs->nom_prenom}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop