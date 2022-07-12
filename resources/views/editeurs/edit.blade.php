@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">

  <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">Modification de l'éditeur <span style="color: blue;">{{$editeurs->nom}}</span></div>

<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;margin-top:7%;">
  <div class="card-body">
      <form action="{{ url('editeurs/' .$editeurs->id) }}" method="post" class="row g-3">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="col-md-8" style="margin-left: 17%;">
						<label class="form-label" style="font-weight: bold;margin-left:47%;font-size:120%;">Titre</label>
						<input type="text" name="titre" id="titre" value="{{$editeurs->nom}}" class="form-control" required/>
					</div>
          <div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Editer" style="font-size: 120%;color:black; margin-top:2%;"/>
					</div>
    </form>
   
  </div>
</div>
 
@endsection