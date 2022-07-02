

@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">
	<h1>categories</h1>
		<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
			<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
			<li class="breadcrumb-item active">Catégories</li>
		</ol>
    <br><br>
      <div class="form-group">
        <a href="{{ route('categories.create') }}">
          <button type="submit" class="btn btn-outline-primary" style=" font-family: Lato; font-size: 120%;border-color:none; color:black; margin-right:90%;">
            {{ __('Ajouter') }}
          </button>
        </a>
      </div>
          <div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
            <div class="row justify-content-center">
              <div class="col-md-12">


                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			            <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
                    <table class="table align-middle mb-0 bg-white">
                      <thead class="bg-light">
                        <tr>
                        
                          <th scope="col">ID</th>
                          <th scope="col">Titre</th>
                          <th scope="col">Actions</th>
                        
                        </tr>
                      </thead>
                        @forelse($categories as $categories)
                      <tbody>
                        <tr>
                            <div class="d-flex align-items-center">
                              <!-- <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px;" class="rounded-circle" /> -->
                              <div class="fixed-left">
                                <th scope="row" >{{ $categories->id }}</th>
                                <th scope="row" width=20%>{{$categories->titre}}</th>
                              </div>
                            </div>
                        

                          <td>
                            <a href="{{ url('/categories/' . $categories->id) }}" title="View categorie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <a href="{{ url('/categories/' . $categories->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></button></a>
                    
                              <form method="POST" action="{{ url('/categories' . '/' . $categories->id) }}" accept-charset="UTF-8" style="display:inline">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete categories" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </form>
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