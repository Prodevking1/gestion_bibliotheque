
@extends('layouts.app')
@section('content')

<div class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:700px;">
	<div class="col-md-6">
		
		<div class="card">
			<div class="card-header">Inscription</div>
			<div class="card-body">
				<form method="POST" action="{{ route('etudiants.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
						<label class="form-label">Nom</label>
						<input type="text" name="nom" id="nom" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Prenom</label>
						<input type="text" name="prenom" id="prenom" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Age</label>
						<input type="text" name="age" id="age" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">E-mail</label>
						<input type="email" name="email" id="email" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Telephone</label>
						<input type="phone" name="tel" id="tel" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Genre</label>
						<input type="text" name="genre" id="genre" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Filiere</label>
						<input type="text" name="filiere" id="filiere" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Niveau</label>
						<input type="text" name="niveau" id="niveau" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Adresse</label>
						<textarea type="text" name="adresse" id="adresse" class="form-control" /></textarea>
					</div>
					{{-- <div class="mb-3">
						<label class="form-label">Mot de passe</label>
						<input type="password" name="user_password" id="user_password" class="form-control" />
					</div> --}}
					
					{{-- <div class="mb-3">
						<label class="form-label">Photo</label><br />
						<input type="file" name="user_profile" id="user_profile" />
						<br />
						<span class="text-muted">Seules les images .jpg & .png sont autorisées. La taille doit être égale à 225 x 225</span>
					</div> --}}
					<div class="text-center mt-4 mb-2">
						<input type="submit" name="savw" class="btn btn-primary" value="Inscription" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
