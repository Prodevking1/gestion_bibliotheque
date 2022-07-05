
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
				{{ __('Emprunt') }}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('emprunts.store')}}" enctype="multipart/form-data">
					@csrf

					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Livre</label>
						<select class="form-select" name="livre_id" required>
							<option value="" selected disabled>Selectionnez une livre </option>
                            @foreach($livres as $livre)
							<option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                            @endforeach
						</select>
					</div>

					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Etudiant</label>
						<select class="form-select" name="etudiant_id" required>
							<option value="" selected disabled>Selectionnez etudiant </option>
                            @foreach($etudiants as $etudiant)
							<option value="{{ $etudiant->id }}">{{ $etudiant->id }} - {{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                            @endforeach
						</select>
					</div>

                    <div class="col-md-6">
						<label class="form-label" for="date_emprunt" style="font-weight: bold;">Date d'emprunt</label>
						<input type="date" name="date_emprunt" id="date_emprunt" class="form-control" required/>
					</div>

                    <div class="col-md-6">
						<label class="form-label" for="date_retour" style="font-weight: bold;">Date de retour <span style="font-size: 10px; color:blue">(10 jours par defaut)</span></label>
						<input type="date" name="date_retour" id="date_retour" class="form-control"/>
					</div>

                    
					{{-- Button valider  --}}

						<div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-outline-primary " value="Emprunter" style="color: black;font-size:120%;"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
