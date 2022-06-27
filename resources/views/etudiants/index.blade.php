@extends('layouts.app')
@section('content')
<div class="container-fluid py-4" style="min-height: 700px;">
			<h1>Gestion des utilisateurs</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des utilisateurs</li>
			</ol>

			<div class="card mb-4">
				<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Nom complet</th>
      <th>E-mail</th>
      <th>Telephone</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  @forelse($etudiants as $etudiant)
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
          <div class="ms-3">
            <p class="fw-bold mb-1">{{ $etudiant->nom }} {{ $etudiant->prenom }}</p>
            <p class="text-muted mb-0">#{{$etudiant->id}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$etudiant->email}}</p>
      </td>
      <td>
                <p class="fw-normal mb-1">{{$etudiant->tel}}</p>

      </td>
      <td>Neant</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Editer
        </button>
      </td>
    </tr>
    @empty
     <tr>
         <td colspan="8">Aucun etudiant n'a ete trouve !</td>
     </tr>
  </tbody>
  @endforelse
</table>
			</div>
		</div>
@endsection