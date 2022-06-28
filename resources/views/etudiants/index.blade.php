{{-- @extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
			<h1 style="font-family: Stencil Std, fantasy;">Gestion des Etudiants</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border" >
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des Etudiants</li>
			</ol>
          <div class="" style="">
            <a href="{{ route('etudiants.create') }}">
            <button type="submit" class="btn btn-outline-info" style=" font-family: Stencil Std, fantasy; font-size: 100%;border-color:none;color:;">
                      {{ __('Ajoutez un Etudiant') }}
                </button>
            </a>
          </div>
                        
        <div class="search"style="margin-left:80%;">
            <form class="searchbox" method="get" action="search" autocomplete="off">
                  <input name="q" type= "text" size="15" placeholder="Rechercher un Etudiant" />
                  <input class="button-submit" type= "submit" value="" />
            </form>
           
        </div>


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
      <td class=""style="color:blue;font-size:120%;">
    
      <form action="{{route('etudiants.delete', $etudiant->id)}}" method="post">
            @csrf
            <a href='{{route('etudiants.show', $etudiant->id)}}' method='POST'>       
          <i class="fas fa-eye"></i>
      </a>
      <a style="padding-left:15px;"  href='{{route('etudiants.edit', $etudiant->id)}}' method='POST'>
          <i class="fas fa-edit"></i>
      </a>
      <a style="padding-left:15px;"  href='{{route('etudiants.delete', $etudiant->id)}}' method='POST'>
         <i class="fas fa-trash"></i>
      </a>
      <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i></button>
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


 --}}



@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
			<h1 style="font-family: Stencil Std, fantasy;">Gestion des Etudiants</h1>
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border" >
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des Etudiants</li>
			</ol>
          <div class="" style="">
            <a href="{{ route('etudiants.create') }}">
            <button type="submit" class="btn btn-outline-info" style=" font-family: Stencil Std, fantasy; font-size: 100%;border-color:none;color:;">
                      {{ __('Ajoutez un Etudiant') }}
                </button>
            </a>
          </div>
                        
        <div class="search"style="margin-left:80%;">
            <form class="searchbox" method="get" action="search" autocomplete="off">
                  <input name="q" type= "text" size="15" placeholder="Rechercher un Etudiant" />
                  <input class="button-submit" type= "submit" value="" />
            </form>
           
        </div>


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
      <td class="row g-3" style="color:blue;font-size:120%;">

      <div>
        <form class="col-md-6" action="{{route('etudiants.show', $etudiant->id)}}" method="get">
            @csrf
        <button type="submit" class="btn btn-primary"> <i class="fas fa-eye"></i></button>
      </form>
      </div>

      <form class="col-md-6" action="{{route('etudiants.edit', $etudiant->id)}}" method="post">
            @csrf
        <button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i></button>
      </form>
      
      <form class="col-md-6" action="{{route('etudiants.delete', $etudiant->id)}}" method="post">
            @csrf
      <button type="submit" class="btn btn-primary"> <i class="fas fa-trash"></i></button>
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


