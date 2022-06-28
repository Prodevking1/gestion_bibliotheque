<<<<<<< HEAD
@extends('etudiants.layout')
@section('content')
    <div class="container" width=100%>
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Liste des etudiants</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/etudiants/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" width=100%>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Age</th>
                                        <th>Genre</th>
                                        <th>Email</th>
                                        <th>Tel</th>
                                        <th>Adresse</th>
                                        <th>filiere</th>
                                        <th>classe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($etudiants as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->genre }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->filiere }}</td>
                                        <td>{{ $item->classe }}</td>
 
                                        <td>
                                            <a href="{{ url('/etudiants/' . $item->id) }}" title="View categorie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/etudiants/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/etudiants' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete etudiant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
=======
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
>>>>>>> d49333a60e971ce77966a5f17a0ba535bc098b32
@endsection