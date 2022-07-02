

@extends('layouts.app')
@section('content')
<div class="container-fluid py-4" style="min-height: 700px;" width=100%>
			<h1>Editeurs</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des utilisateurs</li>
			</ol>
      <div class="" style="">
            <a href="{{ route('editeurs.create') }}">
            <button type="submit" class="btn btn-outline-info" style=" font-family: Stencil Std, fantasy; font-size: 100%;border-color:none;color:;">
                      {{ __('Ajouter') }}
            </button>
            </a>
          </div>
          <br>
			<div class="card mb-4">
				<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light" width=100%>
    <tr width=100%>
    <th></th>
      <th width=25%>ID</th>
      <th width=40%>Titre</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  @forelse($editeurs as $editeurs)
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <th width=25%><p class="fw-bold mb-1">#{{ $editeurs->id }}</p></th>
            <th width=40%><p class="text-muted mb-0">{{$editeurs->nom}}</p></th>
        
           
          </div>
        </div>
      </td>
     

       <td>
        <div>
        <a href="{{ url('/editeurs/' . $editeurs->id) }}" title="View editeurs"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
         <a href="{{ url('/editeurs/' . $editeurs->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
          <form method="POST" action="{{ url('/editeurs' . '/' . $editeurs->id) }}" accept-charset="UTF-8" style="display:inline">
         {{ method_field('DELETE') }}
          {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete editeurs" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
      </td>
    </tr>
        </div>
        
     
     </form> 
    </tr>
    @empty
     <tr>
         <td colspan="8">Aucun editeur n'a ete trouve !</td>
     </tr>
  </tbody>
  @endforelse
</table>
			</div>
		</div>
@endsection