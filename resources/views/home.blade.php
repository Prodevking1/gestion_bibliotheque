@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>Gestion de Bibliothèque</title>
        <link rel="canonical" href="">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset("assets/css/simple-datatables-style.css") }}" rel="stylesheet" />
            <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet" />
            <script src="{{asset("assets/js/font-awesome-5-all.min.js")}}" crossorigin="anonymous"></script>
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="" sizes="180x180">
        <link rel="icon" href="" sizes="32x32" type="image/png">
        <link rel="icon" href="" sizes="16x16" type="image/png">
        <link rel="manifest" href="">
        <link rel="mask-icon" href="" color="#7952b3">
        <link rel="icon" href="">
        <meta name="theme-color" content="#7952b3">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        body{
        margin-top:20px;
        background-color: #ECF0F1;
        }
        .radius-10 {
            border-radius: 10px !important;
        }

        .border-info {
            border-left: 5px solid  #0dcaf0 !important;
        }
        .border-danger {
            border-left: 5px solid  #fd3550 !important;
        }
        .border-success {
            border-left: 5px solid  #15ca20 !important;
        }
        .border-warning {
            border-left: 5px solid  #ffc107 !important;
        }


        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0);
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .bg-gradient-scooter {
            background: #17ead9;
            background: -webkit-linear-gradient( 
        45deg
        , #17ead9, #6078ea)!important;
            background: linear-gradient( 
        45deg
        , #17ead9, #6078ea)!important;
        }
        .widgets-icons-2 {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ededed;
            font-size: 27px;
            border-radius: 10px;
        }
        .rounded-circle {
            border-radius: 50%!important;
        }
        .text-white {
            color: #fff!important;
        }
        .ms-auto {
            margin-left: auto!important;
        }
        .bg-gradient-bloody {
            background: #f54ea2;
            background: -webkit-linear-gradient( 
        45deg
        , #f54ea2, #ff7676)!important;
            background: linear-gradient( 
        45deg
        , #f54ea2, #ff7676)!important;
        }

        .bg-gradient-ohhappiness {
            background: #00b09b;
            background: -webkit-linear-gradient( 
        45deg
        , #00b09b, #96c93d)!important;
            background: linear-gradient( 
        45deg
        , #00b09b, #96c93d)!important;
        }

        .bg-gradient-blooker {
            background: #ffdf40;
            background: -webkit-linear-gradient( 
        45deg
        , #ffdf40, #ff8359)!important;
            background: linear-gradient( 
        45deg
        , #ffdf40, #ff8359)!important;
        }
    </style>


<div class="container-fluid py-4" style="min-height: 700px; margin-top:0; font-family:Lato;" width=100%>
<div class="twelve">
    <h1>Acceuil</h1>
</div>
<div class="container" style="margin-top: 5%;">
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
       <div class="col">
		 <div class="card radius-10 border-start border-0 border-3 border-info">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Total Livres</p>
						<h4 class="my-1 text-info">{{$livres}}</h4>
						<!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
					</div>
					<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-book"></i>
					</div>
				</div>
			</div>
		 </div>
	   </div>
	   <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total Emprunt</p>
					   <h4 class="my-1 text-danger">{{$emprunts}}</h4>
					   <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-exchange-alt"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total Reservation</p>
					   <h4 class="my-1 text-success">{{$reservations}}</h4>
					   <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fas fa-ticket-alt"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total Lecteurs</p>
					   <h4 class="my-1 text-warning">{{$etudiants}}</h4>
					   <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
      
      <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-info">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary"> Emprunt En Cours</p>
					   <h4 class="my-1 text-primary">{{$emprunts}}</h4>
					   <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-exchange-alt"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div> 

      <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Reservation En Cours</p>
					   <h4 class="my-1 text-success">{{ $reservations }}</h4>
					   <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fas fa-ticket-alt"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>

      <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Auteurs</p>
					   <h4 class="my-1 text-warning">{{  $auteurs }}</h4>
					   <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-user"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>

      <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Catégories</p>
					   <h4 class="my-1 text-danger">{{ $categories }}</h4>
					   <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-list-alt"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>

	</div>
</div>
</div>



@endsection
<style>
.twelve h1 {
  font-size:30px; font-weight:700;  letter-spacing:1px; text-transform:uppercase; width:160px; text-align:center; margin-left:35%; white-space:nowrap; padding-bottom:13px;
}
.twelve h1:before {
    background-color: blue;
    content: '';
    display: block;
    height: 3px;
    width: 65px;
    margin-bottom: 5px;
    margin-left:12px;
}
.twelve h1:after {
    background-color:blue;
    content: '';
    display: block;
    height: 3px;
    width: 69px;
    margin-bottom: 5px;
    margin-left:50%;
}
</style>

