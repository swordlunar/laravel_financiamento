<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body style="width:100%; background-color:#05A8AF">

    <div class="container" style="width:100%">

        <div class="row"  style="margin-top:1%">
            <div class="col-md-4">
                <a href="{{ url('/home') }} " style="color: white;font-size:25px">
                    <b>Sistema de Financiamento</b>
                </a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align:end">
                <a href="{{ url('/register') }}" style="color:white; font-size:25px;margin-right:5%"><b>Registro</b></a>
            </div>
        </div>

        <div class="row" style="margin-top:6%;">
            <div class="col-md-4 col-md-offset-4">

                <div class="panel-heading" style="border-color:white;color: white; text-align:center;margin-bottom:10%;font-size:30px"><b>Login</b></div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" style="color: white">E-Mail</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" style="color: white">Senha</label>

                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group" style="margin-bottom:10%">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> <b style="color: white">Lembrar-me</b>
                            </label>
                        </div>
                    </div>

                    <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-primary" style="background-color: #007680;border-color: #007680">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color: white"><b>Esqueceu a senha?</b></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
