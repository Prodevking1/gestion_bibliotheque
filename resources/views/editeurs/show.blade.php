@extends('layouts.app')
@section('content')
 
 
<div class="card">
  <div class="card-header">Liste des editeurs</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $editeurs->nom }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection