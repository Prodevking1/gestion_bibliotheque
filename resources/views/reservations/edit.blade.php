
@extends('layouts.app')
@section('content')

<div class="container" style="margin-top: 2%;text-align:center;">
    <div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			<br>
			<div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 200%;">
				#{{$reservation->id}}
			</div>

			<br>
			<div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
				<form method="POST" class="row g-3" action="{{ route('livres.update', $livre->id)}}" enctype="multipart/form-data">
					@csrf

                    <!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Etudiant</label>
						<select class="form-select" name="editeur_id" >
							<option value="" selected disabled>#{{$reservation->etudiant->id }} {{$reservation->etudiant->nom }} {{$reservation->etudiant->prenom }}</option>
                            @foreach($livres as $livre)
							<option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                            @endforeach
						</select>
					</div>

					<!-- Input titre du livre -->
					<div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Livre</label>
						<select class="form-select" name="editeur_id" >
							<option value="" selected disabled>{{$reservation->livre->id }} {{$reservation->livre->titre }}</option>
                            @foreach($livres as $livre)
							<option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                            @endforeach
						</select>
					</div>

					 <!-- Input titre du livre -->
                     <div class="col-md-6">
						<label class="form-label" style="font-weight: bold;">Date de reservation</label>
                        @method("PATCH")
                        <input type="hidden" name="id" id="id" value="{{$reservation->id}}" id="id" />
                        <label>titre</label></br>
                        <input type="date" name="date_reservation" id="id" value="{{$reservation->date_reservation}}" class="form-control"></br>
					</div>

					{{-- Button valider  --}}

					<div class="col-md-6 mt-2">
						<div class="text-center mt-4 pt-3">
						<input type="submit" class="btn btn-outline-primary btn-block" value="Modifier la reservation" />
					</div>
					</div>

                    
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
