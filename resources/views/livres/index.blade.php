@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">
			<h1 style="font-family:Lato;">Gestion des livres</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border" >
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des livres</li>
			</ol>
      <br><br>
          <div class="">
            <a href="{{ route('livres.create') }}">
            <button type="submit" class="btn btn-outline-primary" style=" font-family: Lato; font-size: 120%;color:black; margin-right:90%;">
                      {{ __('Ajouter') }}
                </button>
            </a>
          </div>
                        
        <div class="search"style="margin-left:80%;">
            <form class="searchbox" method="get" action="search" autocomplete="off">
                  <input name="q" type= "text" size="15" placeholder="Rechercher un livre" />
                  <input class="button-submit" type= "submit" value="" />
            </form>
           
        </div>


<<<<<<< HEAD
        <div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
            <div class="row justify-content-center">
              <div class="col-md-12">


                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
			            <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
                    <table class="table align-middle mb-0 bg-white">
                      <thead class="bg-light">
                        <tr>
                          <th>Titre</th>
                          <th>No ISBN</th>
                          <th>Auteur</th>
                          <th>Categorie</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      @forelse($livres as $livre)
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
                                <p class="fw-bold mb-1">{{ $livre->titre }}</p>
                                <p class="text-muted mb-0">#{{$livre->id}}</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="fw-normal mb-1">{{$livre->isbn}}</p>
                          </td>
                          <td>
                            <p class="fw-normal mb-1">{{$livre->auteur->nom_prenom}}</p>
                          </td>
                          <td>
                                    <p class="fw-normal mb-1">{{$livre->categorie->titre}}</p>

                          </td>
                          <td>
                            @if ($livre->status == 'Y')
                                <span class='badge badge-success'>disponible</span>
                            @else
                                <span class='badge badge-danger'>indisponible</span>
                            @endif
                          </td>
                          <!-- <td class=" " style="font-size:120%;">

                          
                            <form class="col-4" action="{{route('livres.show', $livre->id)}}" method="get">
                                @csrf
                              <button type="submit" class="btn btn-info"> <i class="fas fa-eye"></i></button>
                            </form>
                          

                          
                            <form class="col-4" action="{{route('livres.edit', $livre->id)}}" method="post">
                                  @csrf
                              <button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i></button>
                            </form>
                          

                          
                            <form class="col-md-4" action="{{route('livres.delete', $livre->id)}}" method="post">
                                  @csrf
                              <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i></button>
                            </form>
                          

                          </td> -->


                          <td>
                            <a href="{{route('livres.show', $livre->id)}}" title="View book"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>

                            <form method="get" action="{{route('livres.edit', $livre->id)}}" accept-charset="UTF-8" style="display:inline">
                                  {{ method_field('EDIT') }}
                                  {{ csrf_field() }}
                              <button type="submit" class="btn btn-primary btn-sm" title="edit book"><i class="fas fa-edit" aria-hidden="true"></i></button>
                            </form>
                            <!-- <a href="{{route('livres.edit', $livre->id)}}" title="Edit book"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></button></a> -->
                    
                              <form method="get" action="{{route('livres.delete', $livre->id)}}" accept-charset="UTF-8" style="display:inline">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete categories" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </form>
                          </td>



                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Aucun livre n'a ete trouve !</td>
                        </tr>
                      </tbody>
                      
                      @endforelse
                    </table>
=======
			<div class="card mb-4">
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Titre</th>
      <th>No ISBN</th>
      <th>Auteur</th>
      <th>Categorie</th>
      <th>Exemplaires</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  @forelse($livres as $livre)
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
            <p class="fw-bold mb-1">{{ $livre->titre }}</p>
            <p class="text-muted mb-0">#{{$livre->id}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$livre->isbn}}</p>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$livre->auteur->nom_prenom}}</p>
      </td>
      <td>
                <p class="fw-normal mb-1">{{$livre->categorie->titre}}</p>

      </td>
      <td>
                <p class="fw-normal mb-1">{{$livre->exemplaire}}</p>

      </td>
      <td>
        @if ($livre->status == 'Y')
             <span class='badge badge-success'>disponible</span>
        @else
             <span class='badge badge-danger'>indisponible</span>
        @endif
      </td>
      <td class="row">

        <form class="col-md-2" action="{{route('livres.show', $livre->id)}}" method="get">
            @csrf
        <button type="submit" class="btn btn-primary"> <i class="fas fa-eye"></i></button>
      </form>

      <form class="col-md-2" action="{{route('livres.edit', $livre->id)}}" method="post">
            @csrf
        <button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i></button>
      </form>
      
      <form class="col-md-2" action="{{route('livres.delete', $livre->id)}}" method="post">
            @csrf
      <button type="submit" class="btn btn-primary"> <i class="fas fa-trash"></i></button>
      </form>

      </td>
    </tr>
    @empty
     <tr>
         <td colspan="8">Aucun livre n'a ete trouve !</td>
     </tr>
  </tbody>
  
  @endforelse
</table>
>>>>>>> fb35059f8b36c975c8553df35295114ce8a17b9d
			</div>
		</div>
@endsection
<style>
            .searchbox {
                background: url(http://3.bp.blogspot.com/-g-zH25_DoxI/VD1BuatkgII/AAAAAAAAAgc/00hxspfvv3s/s1600/searchbar.png) no-repeat;
                width: 208px;
                height: 29px;
                
            }
            input:focus::-webkit-input-placeholder {
                color: transparent;
            }
            input:focus:-moz-placeholder {
                color: transparent;
            }
            input:focus::-moz-placeholder {
                color: transparent;
            }
            .searchbox input {
                outline: none;
            }
            .searchbox input[type="text"] {
                background: transparent;
                margin: 3px 0px 0px 20px;
                padding: 5px 0px 5px 0px;
                border-width: 0px;
                font-family: Arial Narrow, Arial, sans-serif;
                font-size: 12px;
                color: #828282;
                width: 70%;
                display: inline-table;
                vertical-align: top;
            }
            .button-submit {
                background: url(http://4.bp.blogspot.com/-OcDQ6Z9ojlQ/VD1KnwJjFOI/AAAAAAAAAgs/cu_pKN6bpL8/s1600/magnifier.png) no-repeat;
                border-width: 0px;
                cursor: pointer;
                margin-left: 10px;
                margin-top: 4px;
                width: 21px;
                height: 22px;
            }
            .button-submit:hover {
                background: url(http://2.bp.blogspot.com/-4-xFDFGKJrA/VD1Kn04f9TI/AAAAAAAAAgw/2ta84QY1x9A/s1600/magnifier-hover.png) no-repeat;
            }
            .button-submit:active {
                background: url(http://2.bp.blogspot.com/-4-xFDFGKJrA/VD1Kn04f9TI/AAAAAAAAAgw/2ta84QY1x9A/s1600/magnifier-hover.png) no-repeat;
                outline: none;
            }
            .button-submit::-moz-focus-inner {
                border: 0;
            }
</style>


