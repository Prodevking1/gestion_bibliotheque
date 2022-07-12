@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border" >
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des livres</li>
			</ol>

      <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; margin-top:10%;">
			  <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">


<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Titre</th>
      <th>No ISBN</th>
      <th>Auteur</th>
      <th>Categorie</th>
      <th>Editeur</th>
      <th>Exemplaires</th>
      <th>Statut</th>
      <th>Date d'ajout</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
		@csrf
          <div class="ms-3">
            <p class="fw-bold mb-1">{{ $livre->titre }}</p>
            <p class="text-muted mb-0">#{{$livre->id}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{ $livre->isbn }}</p>
      </td>
      <td>
        <p class="fw-normal mb-1">{{ $livre->auteur->nom_prenom }}</p>
      </td>
      <td>
            <p class="fw-normal mb-1">{{ $livre->categorie->titre }}</p>

      </td>
	  <td>
            <p class="fw-normal mb-1">{{ $livre->editeur->nom }}</p>

      </td>
      <td>
            <p class="fw-normal mb-1">{{ $livre->exemplaire }}</p>

      </td>
      <td>
        @if ($livre->status == 'Y')
             <span class='badge badge-success'>disponible</span>
        @else
             <span class='badge badge-danger'>indisponible</span>
        @endif
      </td>
	  <td>
            <p class="fw-normal mb-1">{{ $livre->created_at }}</p>

      </td>
      
    </tr>
  </tbody>
  
</table>
			</div>
		</div>
@endsection
   