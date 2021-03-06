
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
    <style>
           body{
            background-color: #ecedee;
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
<body>
    <div class="container" style="margin-top: 10%;text-align:center;">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

            <br><br>

                <div class="card-title" style="text-align: center;text-transform : uppercase; font-family: Lato; font-weight: bold; font-size: 180%;">{{ __('Inscription') }}</div>

                <br><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"  style="text-align:center;">
                        @csrf

                        <div class="row mb-3"style=" font-family: Lato; font-size: 120%;">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }} <span style="color: red;">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style=" font-family: Lato; font-size: 120%;">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse Email') }} <span style="color: red;">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3"style=" font-family: Lato; font-size: 120%;">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }} <span style="color: red;">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style=" font-family: Lato; font-size: 120%;">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmez') }} <span style="color: red;">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required>
                            </div>
                        </div>

                        <br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 mx-auto">
                                <button type="submit"  class="btn btn-outline-primary" style=" font-family: Stencil Std, fantasy; font-size: 120%;margin-left:20%;">
                                    {{ __("S'Inscrire") }}
                                </button>
                            </div>
                        </div>

                        <br>

                        <div class="row mb-0" style="display: flex; font-family: Lato; font-size: 110%; text-align:center; color:black;">
                            <div class="col-md-6 offset-md-4 mx-auto">
                                <p>Vous avez déjà un compte? <a href="{{ route('login') }}" style="text-decoration:none;">{{ __("Connectez-vous ici") }}</a></p>
                                
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
