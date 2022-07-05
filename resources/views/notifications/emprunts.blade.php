
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
				{{ __('Notification emprunteur') }}
			</div>
			<br>
                            

			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('notifications/send-emprunt', $etudiants->id)}}" enctype="multipart/form-data">
					@csrf

					<!-- Catégorie with select option -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Etudiant</label>
						<select class="form-select" name="etudiant_id" required>
							<option value="" selected disabled>Selectionnez un etudiant </option>
							@foreach($etudiants as $etudiant)
							<option value="{{ $etudiant->id }}">{{ $etudiant->id }} - {{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                            @endforeach
						</select>
					</div>

					{{-- Button valider  --}}

					<div class="col-md-6 mt-2">
						<div class="text-center mt-4 pt-3">
						<input type="submit" name="savw" class="btn btn-outline-primary" value="Rappeler ce lecteur" />
					</div>
					</div>

                    
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
