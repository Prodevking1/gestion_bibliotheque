@extends('layouts.app')
@section('content')
 
<<<<<<< HEAD
<div class="card">
  <div class="card-header">Ajouter une Categorie</div>
  <div class="card-body">
      
      <form action="{{ url('categories') }}" method="post">
        {!! csrf_field() !!}
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
=======

<div class="container" style="margin-top: 2%; text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
        Ajouter une categoirie
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
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Anglais technique" required/>
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
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Ajouter" style="color: black; font-size:large;"/>
					</div>
          </form>
    
        </div>

      </div>


    </div>
>>>>>>> 254acb9435145d50dee031e38e4a735768e1b24a
  </div>
</div>




@endsection