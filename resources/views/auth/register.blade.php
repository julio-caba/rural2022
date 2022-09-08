<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Julio Caba">
    <!--  -->    
    <meta property="og:locale" content="es_LA"/>
    <meta property="og:site_name" content="Rural 2022"/>
    <meta property="og:title" content="Rural 2022"/>
    <meta property="og:url" content="https://www.rural2022.herokuapp.com"/>
    <meta property="og:description" content="Municipalidad de General Pico"/>
    <meta property="og:image" content="https://rural2022.herokuapp.com/frontend/preguntas/logo_muni_color.png" />
    <meta property="og:image:url" content="https://rural2022.herokuapp.com/frontend/preguntas/logo_muni_color.png" />
    <meta property="og:image:secure_url" content="https://rural2022.herokuapp.com/frontend/preguntas/logo_muni_color.png"/>
    <!--  -->
    <link rel="icon" type="image/gif" sizes="96x96" href="https://www.generalpico.gov.ar/Arbol-favico.gif">
    <title>Municipalidad de General Pico - Rural 2022</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/numpad-light.css">
    <script src="js/numpad.js"></script>
</head>
<style>
    body  {
        background-image: url("img/banner.jpg");        
}
#tarjeta{
    opacity: 0.7;
}
#boton{
    opacity: 1;
}
</style>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">        
        <img src="img/footer-logo.png" alt="">        
        <h1 class="text-white">Municipalidad de General Pico</h1> 
    </div>

    <div class="card" id="tarjeta">
        <div class="card-body register-card-body">
            {{-- <p class="login-box-msg">Registrese para poder ingresar</p> --}}
            <img class="pb-3" src="img/estadisticas.png" alt="" style="display: block; margin: 0px auto; width:85%;">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="dni" id="ingreso" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni') }}" placeholder="Ingrese su dni">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('dni')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="col-6" id="boton">
                        <button type="submit" class="btn btn-outline-primary btn-block">Registrarse</button>
                    </div>          
                </div>
            </form>         
        </div>               
    </div>

</div>
<!-- /.register-box -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
    window.addEventListener("load", () => {
      // (C1) BASIC NUMPAD
      numpad.attach({target: document.getElementById("ingreso")});

    });
    </script>
</body>
</html>
