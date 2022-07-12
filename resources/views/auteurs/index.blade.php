

@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 2%;font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">
			<h1 style="text-align:center; text-transform:uppercase;">Auteurs</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Liste des auteurs</li>
			</ol>
      <div>
            <a href="{{ route('auteurs.create') }}">
            <button type="submit" class="btn btn-outline-primary" style=" font-family: Lato; font-size: 120%;border-color:none;color:black; margin-left:5px;">
                      {{ __('Ajoutez') }}
                </button>
            </a>
          </div>
          <br>
          <div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
            <div class="row justify-content-center">
              <div class="col-md-12">


                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			            <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
                    <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light" width=100%>
                        <tr width=100%>
                        <th></th>
                        <th width=25%>ID</th>
                        <th width=40%>Nom de l'auteur</th>
                        <th>Actions</th>
    </tr>
  </thead>
  @forelse($auteurs as $auteurs)
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <!-- <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              /> -->
          <div class="ms-3">
            <th width=25%><p class="fw-bold mb-1">{{ $auteurs->id }}</p></th>
            <th width=40%><p class="text-muted mb-0">{{$auteurs->nom_prenom}}</p></th>
          </div>
        </div>
      </td>

      
        <td>

            <a href="{{ url('/auteurs/' . $auteurs->id) }}" title="View categorie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
            <a href="{{ url('/auteurs/' . $auteurs->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
 
              <form method="POST" action="{{ url('/auteurs' . '/' . $auteurs->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
         <button type="submit" class="btn btn-danger btn-sm" title="Delete auteur" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> </button>
     </form>
     </td>
    </tr>
      
    </tr>
    @empty
     <tr>
         <td colspan="8">Aucun Auteur n'a ete trouve !</td>
     </tr>
  </tbody>
  @endforelse
</table>

			</div>
		</div>
@endsection