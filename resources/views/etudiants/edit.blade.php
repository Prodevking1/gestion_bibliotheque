
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Stencil Std, fantasy; font-weight: bold; font-size: 200%;">
				{{ __('Modification de ') }}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Stencil Std, fantasy;">
				<form method="POST" class="row g-3" action="{{ route('etudiants.update', $etudiants->id)}}" enctype="multipart/form-data">
					@csrf

					<!-- Input de nom de l'etudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Nom</label>
						<input type="text" name="nom" id="nom" class="form-control" value="{{$etudiants->nom}}" required/>
					</div>


					<!-- Input de prenom -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Prenom</label>
						<input type="text" name="prenom" id="prenom" class="form-control" value="{{$etudiants->prenom}}" required/>
					</div>


					<!-- Date de naissance -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Date de Naissance</label>
						<input type="text" name="age" id="age" class="form-control" value="{{$etudiants->age}}" required/>
					</div>


					<!-- Email -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Email</label>
						<input type="email" name="email" id="email" class="form-control" value="{{$etudiants->email}}" required/>
					</div>


					<!-- Téléphone -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Téléphone</label>
						<input type="phone" name="tel" id="tel" class="form-control" value="{{$etudiants->tel}}" required/>
					</div>


					<!-- Genre with checkbox -->
					<div class="col-md-6" style="margin-top: 2%;"> 
						<label class="form-label" style="font-weight: bold;">Genre</label>
						<div class="col-md-12 mx-auto" >
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="genre" id="masculinChoice" value="masculin" {{$etudiants->genre == 'masculin'}} ?? checked>
								<label class="form-check-label" for="masculinChoice">Masculin</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="genre" id="femininChoice" value="feminin" {{$etudiants->genre == 'feminin'}} ?? checked>
								<label class="form-check-label" for="femininChoice">Feminin</label>
							</div>
						</div>
					</div>



					<!-- Filière with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Filière</label>
						<select class="form-select" name="filiere" aria-label="Default select example" >
							<option value="" selected>{{$etudiants->filiere}}</option>
							<option value="MIAGE">MIAGE</option>
							<option value="ADB" >ADB</option>
							<option value="CCA">CCA</option>
							<option value="ABF">ABF</option>
							<option value="MG">MG</option>
						</select>
					</div>


					<!-- Niveau d'étude with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Niveau</label>
						<select class="form-select" name="niveau" aria-label="Default select example" >
							<option value="" selected disabled>{{$etudiants->niveau}}</option>
							<option value="LICENCE 1" >LICENCE 1</option>
							<option value="LICENCE 2" >LICENCE 2</option>
							<option value="LICENCE 3" ></option>LICENCE 3</option>
						</select>
					</div>


					<!-- Adresse de l'étudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Adresse</label>
						<input type="text" name="adresse" id="adresse" class="form-control" value="{{$etudiants->adresse}}" />
					</div>


					<!-- Mot de passe etudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Mot de passe</label>
						<input type="password" name="user_password" id="user_password" class="form-control"/>
					</div>

					<br>

					<div class="text-center mt-4 mb-2">
						<input type="submit" name="save" class="btn btn-outline-primary btn-lg" value="Enregistrer" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
