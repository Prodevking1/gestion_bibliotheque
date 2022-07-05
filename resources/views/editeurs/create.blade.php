@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">Ajouter un Editeur</div>
    
<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;margin-top:10%;">
  <div class="card-body" style="text-transform : uppercase; font-family: Lato; margin-top:5%;">
      
      <form action="{{ url('editeurs') }}" method="post" class="row g-3">
        {!! csrf_field() !!}
        <div class="col-md-8">
						<label class="form-label " style="font-weight: bold; margin-left:65%;">Nom Complet</label>
						<input type="text" name="nom" id="nom" class="form-control" placeholder="TAPSOBA Rachid" style="margin-left:27%;" required/>
				</div>
        <div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Ajouter" style="color: black; font-size:large;"/>
				</div>
    </form>
   
  </div>
</div>
 
@endsection