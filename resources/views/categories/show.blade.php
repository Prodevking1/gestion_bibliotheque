@extends('layouts.app')
@section('content')
 
<div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
  <div class="row justify-content-center">
    <div class="col-md-8">
    <h1 style="font-family:Lato;">Catégories</h1>
    <div class="container" style="margin-top: 2%;text-align:center; font-family:Lato;">
            <div class="row justify-content-center">
              <div class="col-md-12">


                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; margin-top:10%;">
			            <div class="card-body"  style="text-transform : uppercase; font-family: Lato;">
                    <table class="table align-middle mb-0 bg-white">
                      <thead class="bg-light">
                        <tr>
                        <th scope="col">ID</th> 
                          <th scope="col">Titre</th>
                          <th scope="col"></th>                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <div class="d-flex align-items-center">
                              <!-- <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px;" class="rounded-circle" /> -->
                              <div class="fixed-left">
                              <th scope="row" >{{ $categories->id }}</th>
                                <th scope="row" width=20%>{{$categories->titre}}</th>
                              </div>
                 </div>
@endsection