<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>

.notice-card-shadow {
    max-width: 350px;
    position: relative;
}
.content-card{
    margin-top:30px;    
    margin-left:50px;
}
.notice-card {
    border-radius: 10px;
    
}
.notice-card {
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(164, 164, 0, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
    background: #FCEBA6;
}

.notice-card.card-information .content {
    padding: 40px 55px;
    text-align: center;
}
.notice-card .content {
    padding: 20px 20px 10px 20px;
}

.notice-card .main-cat, .card .label {
    font-size: 21px;
    font-weight:800;
    margin-bottom: 0px;
    color: #7a9e9f;
}
.notice-card-shadow:before {
    background-image: url("images/shadow-card.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h3 {
    font-size: 1.3em;
    font-weight: 900;
    line-height: 1.5em;
    width:auto;
    color: #008000;
}
.notice-card .description {
    font-size: 16px;
    color: #66615b;
}


</style>

</head>

<body>
<div class="row">
    <div class="col-md-4 col-sm-6 content-card">
        <div class="notice-card-shadow">
            <div class="notice-card card-information">
                <div class="content">
                    <div class="main-cat">#{{$reservation->id}}</div>
                    <h3>{{ $etudiant->nom }} {{ $etudiant->nom }}, </h3>
                    <p class="description">Ce present e-mail vous informe que votre reservation pour le livre intitule  {{$reservation->}}.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

