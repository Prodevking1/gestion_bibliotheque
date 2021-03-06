@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%; text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
        Ajouter une catégorie
      </div>
      <br><br>

      <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <br><br>

        <div class="card-body" style="text-transform : uppercase; font-family: Lato;">
        
          <form action="{{ url('categories') }}" method="post" class="row g-3">
            {!! csrf_field() !!}
            <!-- Input nom catégorie -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Titre</label>
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Finance" required/>
					</div>
          <!-- Input emplacement -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Emplacement</label>
						<select class="form-select" name="emplacement" aria-label="Default select example" required>
							<option value="" selected disabled>Selectionnez l'emplacement</option>
							<option value="MIAGE">Programmation</option>
							<option value="ADB">Romantique</option>
							<option value="CCA">Thriller</option>
							<option value="ABF">Aventure</option>
							<option value="MG">Nouvel</option>
						</select>
					</div>
          <div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Ajouter" style="color: black; font-size:large;"/>
					</div>
          </form>
    
        </div>

      </div>


    </div>
  </div>
</div>




@endsection