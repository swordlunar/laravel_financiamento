<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>

<style>

    body, html {
        height: 100%;
    }

    .bg {
    background-image: url("images/fundo.jpg");

    height: 97%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>

<body class="bg">


        <div class="container" style="width:100%">

            <div class="row"  style="margin-top:1%">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4" style="text-align:end">
                    <a href="{{ url('/login') }}" style="color:white; font-size:25px;"><b>Login</b></a>
                    &nbsp;&nbsp;
                    <a href="{{ url('/register') }}" style="color:white; font-size:25px;margin-left:2%;margin-right:5%"><b>Registro</b></a>
                </div>

            </div>

            <div class="row"  style="margin-top:1%">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" style="text-align:center;">
                    <p style="margin-left:34%;margin-top:3%;font-size:50px; color:white"><b>Bem vindo ao Sistema de Financiamentos!</b></p>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            
        </div>
    
    
    

</body>

</html>