
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
    <div class="row justify-content-center">
	<div class="col-md-8">

		<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
			{{ __('Ajout de livre') }}
		</div>
		<br><br>
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('livres.store')}}" enctype="multipart/form-data">
					@csrf

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Titre</label>
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Anglais technique" required/>
					</div>

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">No ISBN</label>
						<input type="number" name="isbn" id="isbn" class="form-control" placeholder="0725 1023 0212" required/>
					</div>

					<!-- Catégorie with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Catégorie</label>
						<select class="form-select" name="categorie_id" required>
							<option value="" selected disabled>Selectionnez une catégorie </option>

                            @foreach($categories as $categorie)
							<option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                            @endforeach
						</select>
					</div>

                    <!-- Auteur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Auteur</label>
						<select class="form-select" name="auteur_id" required>
							<option value="" selected disabled>Selectionnez un auteur </option>
                            @foreach($auteurs as $auteur)
							<option value="{{ $auteur->id}}">{{ $auteur->nom_prenom }}</option>
                            @endforeach
						</select>
					</div>

                    <!-- Editeur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Editeur</label>
						<select class="form-select" name="editeur_id" required>
							<option value="" selected disabled>Selectionnez un editeur </option>
                            @foreach($editeurs as $editeur)
							<option value="{{ $editeur->id }}">{{ $editeur->nom }}</option>
                            @endforeach
						</select>
					</div>

					<!-- Input Exemplaire livre -->
					<div class="col-md-6 ">
						<label class="form-label" style="font-weight: bold;">Nombre Exemplaire</label>
						<input type="number" name="exemplaire" id="exemplaire" class="form-control" placeholder="07" required/>
					</div>

					{{-- Button valider  --}}

					<div class="col-md-6 mt-2 mx-auto">
						<div class="text-center mt-4 pt-3">
						<input type="submit" name="savw" class="btn btn-outline-primary " value="Ajouter" style="color: black; font-size:large;">
					</div>
					</div>

                    
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
