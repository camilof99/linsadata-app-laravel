
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keyframes.css') }}">

</head>
<body>
        <div class="bg_trans">
          <div class="row cont_sect_index">
            <div class="col-md-5 text">
              <h6>Personal altamente calificado</h6>
              <h1><b>LINSACOL S.A.S</b></h1>
              <p>
                Empresa colombiana especializada en el tratamiento químico de aguas y
                en la prestación de servicios concernientes a la conservación de la
                calidad de la misma.
              </p>
            </div>
            <div class="login-box">
              <img src="{{ asset('img/icon-login.png') }}" class="avatar" alt="Avatar Image">
              <h1>INICIAR SESIÓN</h1>
              <form method="post" action="{{ url('/verificar') }}">
                {{ csrf_field() }}
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Ingresa Correo">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingresa contraseña">
                
                <input type="submit" value="Aceptar"></input>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript" src="{{ asset('query/query.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('popper/popper.min.css') }}"></script>
</body>
</html>