<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Gestion de Bibliothèque</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("assets/css/simple-datatables-style.css") }}" rel="stylesheet" />
        <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet" />
        <script src="{{asset("assets/js/font-awesome-5-all.min.js")}}" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="" sizes="180x180">
    <link rel="icon" href="" sizes="32x32" type="image/png">
    <link rel="icon" href="" sizes="16x16" type="image/png">
    <link rel="manifest" href="">
    <link rel="mask-icon" href="" color="#7952b3">
    <link rel="icon" href="">
    <meta name="theme-color" content="#7952b3">
    <style>
        .colo{
            background-color: #eee;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
       
        a.ho:hover{
            background-color: #5DADE2;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body class="sb-nav-fixed" style="font-family: Arial;">


        <!-- Extension jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Extension DATEPICKER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Noyau JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    


  
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color:#fff;">

        

        <!-- Navbar Brand-->
        <a href="index.php" class="brand-link" style=" text-decoration:none;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="rounded-circle" data-holder-rendered="true" style="width: 18%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <span class="brand-text" style="color: black;">   GESBiblio</span>
        </a>

        <!-- Sidebar Toggle-->
        <ul class="navbar-nav" style="margin-right: 77%;">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: black;"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 justify-content-between" style="color: black; font-size:15px">

        <!-- Alerte icone -->
        <li class="nav-item dropdown" style="margin-left: -100%;">
          <a class="nav-link dropdown-item" data-toggle="dropdown" href="#" style="color: black;">
            <i class="far fa-bell"></i>
                <span class="position-absolute top-7 start-90 translate-middle badge rounded-pill bg-danger">
                        1
                    <span class="visually-hidden">unread messages</span>
                </span>
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"> alerte de stock</span>
            <div class="dropdown-divider"></div>

           
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> Le produit <br><i class="fas fa-envelope mr-4"></i> a ateint son stock d'alerte
                </a>
              <div class="dropdown-divider"></div>

             
              <div class="dropdown-divider"></div>
                <a href="input.php" class="dropdown-item dropdown-footer">S'approvisionnez</a>
              </div> -->
        </li>


        <!-- Deconnexion icone -->
            <li class="nav-item">

                <a class="nav-link dropdown-item" href="pages/tables/logout.php" role="button" style="color: black;">
                <i class="fas fa-power-off"></i>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button href="{{ route('logout') }}" class="nav-link dropdown-item" role="button" style="color: black;">
                <i class="fas fa-power-off"></i>
                    </button>
                    </form>
                

            </li>


            <!-- Profile icone -->
            <li class="nav-item dropdown" style="margin-right: 60%;">
                <a class="nav-link dropdown-toggle dropdown-item" data-toggle="dropdown" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" style="color: black;"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
                    <li><a class="dropdown-item" href="setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Reglages</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav colo" id="sidenavAccordion">
                <div class="sb-sidenav-menu" style="font-size: 20px; margin-top: 20px;">
                    <div class="nav">
                        <a class="nav-link ho" href="{{ route('home') }}" style="color: black;"><i class="fa fa-home" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i> Acceuil</a>
                        <a class="nav-link ho" href="{{route('etudiants')}}" style="color: black;" > <i class="fa fa-users" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i>Lecteurs</a>
                        <a class="nav-link ho" href="{{ route('livres') }}" style="color: black;" ><i class="fa fa-book" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i>Livres</a>
                        <a class="nav-link ho" href="{{ route('categories.index') }}" style="color: black;"><i class="fa fa-list-alt" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i></i> Categories</a>
                        <a class="nav-link ho" href="{{ route('auteurs.index') }}" style="color: black;" ><i class="fas fa-user" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i>Auteurs</a>
                        <a class="nav-link ho" href="{{route('editeurs.index')}}" style="color: black;" > <i class="fa fa-users" aria-hidden="true" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i> Editeurs</a>
                        <a class="nav-link ho" href="{{ route('emprunts') }}" style="color: black;" ><i class="fas fa-exchange-alt" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i> Emprunts</a>
                        <a class="nav-link ho" href="{{ route('reservations') }}" style="color: black;" ><i class="fas fa-ticket-alt" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i> Réservations</a>
                        {{-- <a class="nav-link ho" href="" style="color: black;" ><i class="fa fa-history" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i> Rappels</a> --}}
                        <li class="nav-item dropdown" style="margin-right: 60%;">
                <a class="nav-link dropdown-toggle dropdown-item" data-toggle="dropdown" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" style="color: black;"><i class="fa fa-history" style="margin-left: 7%;margin-right: 17px; margin-bottom: 4px;"></i>Rappels</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('notifications.reservations') }}"><i class="fa fa-ticket-alt" aria-hidden="true"></i> Reservations</a></li>
                    <li><a class="dropdown-item" href="{{ route('notifications.emprunts') }}"><i class="fa fa-exchange-alt" aria-hidden="true"></i> Emprunts</a></li>
                </ul>
            </li>

                    </div>
                </div>
                <div class="sb-sidenav-footer">

                </div>
            </nav>
        </div>

<div class="fixed-bottom p-4" style="height:7%; position:center; background-color:#fff;">
<footer class="main-footer" style="margin-left: 13%;">
      <strong>Copyright &copy; <a href="https://github.com/Prodevking1/gestion_bibliotheque">2021-2022 GESBiblio-Miage2/IBAM</a> </strong>
      Tous droits reservés
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1
      </div>
    </footer>
</div>


        <div id="layoutSidenav_content" style="background-color:#eee;">
            @yield('content')
        </div>


      




    </body>
