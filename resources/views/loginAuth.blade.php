<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linsadata</title>
  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keyframes.css') }}">

</head>
<body>
    <div class="section_index">
        <div class="bg_trans">

          <div class="cont_sect_index">
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
           

              @if (session()->has('flash'))
              <div class="alert alert-warning" style="margin-top: 10px;">{{ session('flash') }}</div>
              @endif
              
              <form action="{{ route('login') }}" method="post" id="login_form">

                {{csrf_field()}}

                <div class="{{ $errors->has('email') ? 'has-error' : '' }}">
               <label for="email"> </i>Correo</label>
                <input type="email" name="email" id="email" placeholder="Ingresa Correo" value="{{ old('email') }}">
                  {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="{{ $errors->has('password') ? 'has-error' : '' }}">
                  <label class="lbl-pass" for="password">Contraseña</label>
                  <input type="password" name="password" id="password" placeholder="Ingresa contraseña">
                  {!! $errors->first('password', '<span class="help-block">:message</span>') !!}  
                </div>

                <button type="submit" class="btn_login" value="Login">Iniciar Sesión</button>
            
            </form>
            </div>
          </div>
        </div>
      </div>
        <script type="text/javascript" src="{{ asset('js/function.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/query-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
   
</body>
</html>


