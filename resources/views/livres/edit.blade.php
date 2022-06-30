
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
				#{{$livre->id}}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('livres.update', $livre->id)}}" enctype="multipart/form-data">
					@csrf

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Titre</label>
						<input type="text" name="titre" id="titre" class="form-control"value="{{ $livre->titre }}"/>
					</div>

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">ISBN</label>
						<input type="number" name="isbn" id="isbn" class="form-control" value="{{ $livre->isbn}}"/>
					</div>

					<!-- Catégorie with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Catégorie</label>
						<select class="form-select" name="categorie_id">
							<option value="" selected disabled>{{$livre->categorie->titre }}</option>

                            @foreach($categories as $categorie)
							<option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                            @endforeach
						</select>
					</div>

                    <!-- Auteur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Auteur</label>
						<select class="form-select" name="auteur_id">
							<option value="" selected disabled>{{$livre->auteur->nom_prenom}}</option>
                            @foreach($auteurs as $auteur)
							<option value="{{ $auteur->id}}">{{ $auteur->nom_prenom }}</option>
                            @endforeach
						</select>
					</div>

                    <!-- Editeur with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Editeur</label>
						<select class="form-select" name="editeur_id" >
							<option value="" selected disabled>{{$livre->editeur->nom }}</option>
                            @foreach($editeurs as $editeur)
							<option value="{{ $editeur->id }}">{{ $editeur->nom }}</option>
                            @endforeach
						</select>
					</div>

					{{-- Button valider  --}}

					<div class="col-md-6 mt-2">
						<div class="text-center mt-4 pt-3">
						<input type="submit" class="btn btn-outline-primary btn-block" value="Modifier ce livre" />
					</div>
					</div>

                    
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
