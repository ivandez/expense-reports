<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="body text-center">
    <form action="{{ route('login') }}" method="post" class="formulario">
        @csrf
        <i class="fas fa-user logo"></i>
        <h1 class="h3 mb-3 font-weight-normal text-capitalize">inicio de sesión</h1>

        <input type="text" class="form-control" autocomplete="off" name="email" placeholder="Tu correo">
        
        <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Tu contraseña">
            {!! $errors->first('email', '<small>
                <div class="alert alert-danger mb-0" role="alert">:message</div>
            </small>') !!}
        
        <a href="{{ route('registro') }}" class="mb-2">¿No tienes una cuenta? Registrate</a>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" id="remember" class="form-check-input">Recuérdame
            </label>
        </div>

        <button type="submit" class="btn btn-primary formulario__boton-subir text-uppercase">iniciar sesión</button>
    </form>

    <script src="https://kit.fontawesome.com/ba0e2a9630.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>