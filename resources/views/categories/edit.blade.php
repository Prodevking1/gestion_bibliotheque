@extends('layouts.app')
@section('content')
 

<div class="container" style="margin-top: 2%;font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">

    <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">Modification de <span style="color: blue;">{{$categories->titre}}</span></div>
<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;margin-top:7%;">

  <div class="card-body">
      <form action="{{ url('categories/' .$categories->id) }}" method="post" class="row g-3">
        {!! csrf_field() !!}
        @method("PATCH")
        <!-- <div class="col-md-6">
          <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        </div> -->
        <div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Titre</label>
						<input type="text" name="titre" id="titre" value="{{$categories->titre}}" class="form-control" required/>
					</div>
         <!-- Input emplacement -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Emplacement</label>
						<select class="form-select" name="emplacement" aria-label="Default select example" required>
							<option value="" selected disabled>Selectionnez votre filière</option>
							<option value="MIAGE">Programmation</option>
							<option value="ADB">Romantique</option>
							<option value="CCA">Thriller</option>
							<option value="ABF">Aventure</option>
							<option value="MG">Nouvel</option>
						</select>
					</div>
        <div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Editer" style="font-size: 120%;color:black; margin-top:2%;"/>
					</div>
    </form>
   
  </div>
</div>
 
@endsection