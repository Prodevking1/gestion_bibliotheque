@extends('layouts.app')

@section('content')



<div class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:700px;">
	<div class="col-md-6">
		
		<div class="card">
			<div class="card-header">Inscription</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="text" name="user_email_address" id="user_email_address" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Mot de passe</label>
						<input type="password" name="user_password" id="user_password" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="user_name" class="form-control" id="user_name" value="" />
                    </div>
					<div class="mb-3">
						<label class="form-label">Téléphone</label>
						<input type="text" name="user_contact_no" id="user_contact_no" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Adresse</label>
						<textarea name="user_address" id="user_address" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">Photo</label><br />
						<input type="file" name="user_profile" id="user_profile" />
						<br />
						<span class="text-muted">Seules les images .jpg & .png sont autorisées. La taille doit être égale à 225 x 225</span>
					</div>
					<div class="text-center mt-4 mb-2">
						<input type="submit" name="register_button" class="btn btn-primary" value="Inscription" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection