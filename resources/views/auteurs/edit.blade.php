@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;text-align:center; ">
  <div class="row justify-content-center">
    <div class="col-md-8">
  <h1 style="font-family:Lato;">Modification</h1>
  <div class="card-body">
      <form action="{{ url('auteurs/' .$auteurs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$auteurs->id}}" id="id" />
        <label>Nom Complet</label></br>
        <input type="text" name="nom_prenom" id="id" value="{{$auteurs->nom_prenom}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn btn-outline-info"style=" font-family: Stencil Std, fantasy; font-size: 100%;"></br>
    </form>
   
  </div>
</div>
 
@endsection