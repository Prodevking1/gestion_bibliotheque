

@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 2%;font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-12">
	<h1 style="text-align:center; ">categories</h1>
		<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
			<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
			<li class="breadcrumb-item active">Catégories</li>
		</ol>
    <br><br>
      <div class="form-group">
        <a href="{{ route('categories.create') }}">
          
        <button type="submit" class="btn btn-outline-info" style="font-size: 100%; font-family: Stencil Std, fantasy;">
                      {{ __('Ajouter') }}
                </button>
        </a>
      </div>
      <div class="search"style="margin-left:80%;">
            <form class="searchbox" method="get" action="search" autocomplete="off">
                  <input name="q" type= "text" size="15" placeholder="Rechercher une categorie" />
                  <input class="button-submit" type= "submit" value="" />
            </form>
           
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
