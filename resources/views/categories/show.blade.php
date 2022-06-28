@extends('categories.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Liste des categories</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $categories->titre }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>