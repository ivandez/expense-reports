<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="body text-center">
    <form action="{{ route('register') }}" method="post" class="formulario">
        @csrf
        <i class="fas fa-users logo"></i>
        <h1 class="h3 mb-3 font-weight-normal text-capitalize">registro</h1>        

        <input type="text" autocomplete="off" class="form-control" name="name" placeholder="Tu nombre" value="{{ old('name')}}">
        {!! $errors->first('name', '<small><div class="alert alert-danger mb-0" role="alert">:message</div></small>') !!}

        <input type="text" class="form-control" autocomplete="off" name="email" placeholder="nombre@ejemplo.com">
        {!! $errors->first('email', '<small><div class="alert alert-danger mb-0" role="alert">:message</div></small>') !!}

        <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Tu contraseña">        
        {!! $errors->first('password', '<small><div class="alert alert-danger mb-0" role="alert">:message</div></small>') !!}

        <input type="password" class="form-control mb-1" autocomplete="off" name="password_confirmation" placeholder="Confirma tu contraseña">
        <a href="{{ route('login') }}" class="mb-2">¿Ya tienes una cuenta? Inicia sesión</a>
        <button type="submit" class="btn btn-primary formulario__boton-subir text-uppercase">registrate</button>
    </form>

    <script src="https://kit.fontawesome.com/ba0e2a9630.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>