

@extends('layouts.app')
@section('content')
<div class="container-fluid py-4" style="min-height: 700px;" width=100%>
			<h1>Gestion des utilisateurs</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des utilisateurs</li>
			</ol>

			<div class="card mb-4">
				<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light" width=100%>
    <tr width=100%>
    <th>#</th>
      <th width=25%>ID</th>
      <th width=40%>Titre</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  @forelse($categories as $categories)
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
            <th width=25%><p class="fw-bold mb-1">{{ $categories->id }}</p></th>
            <th width=40%><p class="text-muted mb-0">{{$categories->titre}}</p></th>
        
           
          </div>
        </div>
      </td>
     

                             <td>
                                            <a href="{{ url('/categories/' . $categories->id) }}" title="View categorie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/categories/' . $categories->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/categories' . '/' . $categories->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete categories" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
      
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