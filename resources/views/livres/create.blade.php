
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
				{{ __('Ajout de livre') }}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('etudiants.store')}}" enctype="multipart/form-data">
					@csrf

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Titre</label>
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Anglais technique" required/>
					</div>


					<!-- Catégorie with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Catégorie</label>
						<select class="form-select" name="filiere" required>
                            @foreach($categories as $categorie)
							<option value="{{ $categorie->titre }}" selected disabled>{{ $categorie->titre }}</option>
							<option value=""></option>
                            @endforeach
						</select>
					</div>

                    <!-- Auteur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Auteur</label>
						<select class="form-select" name="filiere" required>
							<option value="" selected disabled>Selectionnez un auteur </option>
							<option value=""></option>
						</select>
					</div>

                    <!-- Editeur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Editeur</label>
						<select class="form-select" name="filiere" required>
							<option value="" selected disabled>Selectionnez un auteur </option>
							<option value=""></option>
						</select>
					</div>
                    <div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Ajouter ce livre" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
