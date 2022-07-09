@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">
    <h1 style="font-family:Lato;">Auteurs</h1>
			            <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
                    <table class="table align-middle mb-0 bg-white">
                      <thead class="bg-light">
                        <tr>
                        <th scope="col">ID</th> 
                          <th scope="col">Nom Complet</th>                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <div class="d-flex align-items-center">
                              <!-- <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px;" class="rounded-circle" /> -->
                              <div class="fixed-left">
                              <th scope="row" width=20%>{{$auteurs->id}}</th>
                              <th scope="row" >{{ $auteurs->nom_prenom }}</th>
                               
                              </div>
                 </div>
@endsection