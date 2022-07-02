@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
			<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border" >
				<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
				<li class="breadcrumb-item active">Gestion des livres</li>
			</ol>

<div class="card mb-4">
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>N° de reservation</th>
      <th>Etudiant</th>
      <th>Livre</th>
      <th>Dade de reservation</th>
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


