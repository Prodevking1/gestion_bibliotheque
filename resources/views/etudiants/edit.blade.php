
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Stencil Std, fantasy; font-weight: bold; font-size: 200%;">
				{{ __('Mod ') }}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Stencil Std, fantasy;">
				<form method="POST" class="row g-3" action="{{ route('etudiants.store')}}" enctype="multipart/form-data">
					@csrf

					<!-- Input de nom de l'etudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Nom</label>
						<input type="text" name="nom" id="nom" class="form-control" placeholder="OUEDRAOGO" required/>
					</div>


					<!-- Input de prenom -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Prenom</label>
						<input type="text" name="prenom" id="prenom" class="form-control" placeholder="Nasser" required/>
					</div>


					<!-- Date de naissance -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Date de Naissance</label>
						<input type="text" name="age" id="age" class="form-control" placeholder="jj/mm/aaaa" required/>
					</div>


					<!-- Email -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="nasserodg60@gmail.com" required/>
					</div>


					<!-- Téléphone -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Téléphone</label>
						<input type="phone" name="tel" id="tel" class="form-control" placeholder="Ex: +226 60558128" required/>
					</div>


					<!-- Genre with checkbox -->
					<div class="col-md-6" style="margin-top: 2%;"> 
						<label class="form-label" style="font-weight: bold;">Genre</label>
						<div class="col-md-12 mx-auto" >
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="genre" id="masculinChoice" value="masculin" checked>
								<label class="form-check-label" for="inlineRadio1">Masculin</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="genre" id="femininChoice" value="feminin">
								<label class="form-check-label" for="inlineRadio2">Feminin</label>
							</div>
						</div>
					</div>



					<!-- Filière with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Filière</label>
						<select class="form-select" name="filiere" aria-label="Default select example" required>
							<option value="" selected disabled>Selectionnez votre filière</option>
							<option value="MIAGE">MIAGE</option>
							<option value="ADB">ADB</option>
							<option value="CCA">CCA</option>
							<option value="ABF">ABF</option>
							<option value="MG">MG</option>
						</select>
					</div>


					<!-- Niveau d'étude with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Niveau</label>
						<select class="form-select" name="niveau" aria-label="Default select example" required>
							<option value="" selected disabled>Selectionnez votre niveau</option>
							<option value="LICENCE 1">LICENCE 1</option>
							<option value="LICENCE 2">LICENCE 2</option>
							<option value="LICENCE 3">LICENCE 3</option>
						</select>
					</div>


					<!-- Adresse de l'étudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Adresse</label>
						<input type="text" name="adresse" id="adresse" class="form-control" placeholder="Ex: Saaba" required/>
					</div>


					<!-- Mot de passe etudiant -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Mot de passe</label>
						<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Entrez votre mot de passe" required/>
					</div>

					<br>

					<!-- Upload photo etudiant -->
					<div class="mb-3">
						<label class="form-label" style="font-weight: bold;">Photo</label><br />
						<input type="file" name="user_profile" id="user_profile" required/>
						<br />
						<span class="text-muted">Seules les images .jpg & .png sont autorisées. La taille doit être égale à 225 x 225</span>
					</div>
					<div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Inscription" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
