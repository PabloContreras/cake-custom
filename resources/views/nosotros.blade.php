<!-- BOOTSTRAP 4 WEBSITE -->
<!doctype html>
<html lang="en">
  <head>
    <title>CakeCustom | Nosotros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">

    <style type="text/css">
      #footer{
        margin-bottom:3rem;
      }
      .jumbutron{
        background-image: url("/img/cake.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom center;
        padding: 7rem 0;
      }
      .mastinfo{
        background: rgba(255,255,255,0.5);
        padding: 2rem;
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-bottom">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="topNav" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="{{url('/inicio')}}" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/nosotros')}}" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/servicios')}}" class="nav-link">Servicios</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/contacto')}}" class="nav-link">Contacto</a>
            </li>
            @if (Route::has('login'))
              <li class="nav-item">
                @auth
                  <a href="{{ url('/home') }}" class="nav-link">Comprar</a>
                @else
                  <a href="{{ route('login') }}" class="nav-link">Entrar</a>
              </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Registro</a>
                  </li>
                @endif
                @endauth
            @endif
            </li>
          </ul>
        </div>
      </nav>
    <section class="jumbutron">
        <div class="container" style="background-color: rgba(0,0,0,.1);">
            <div class="display-3 text-light"> CakeCustom
            </div>
            {{--<p class="text-light"> ¡Bievenido!</p>
            <div>
                <a href"#" class="btn btn-primary text-light">Call to action 1</a>
                <a href"#" class="btn btn-secondary text-light">Call to action 2</a>
            </div>--}}
        </div> 
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <br><br><br><br><br>
            <h1>Misión</h1>
            <p>Somos una empresa responsable y honesta contigo y el entorno, elaboramos ricos pasteles y postres con nuestro tradicional toque francés, para consentir el gusto de tus seres queridos, siendo parte de tus momentos mas especiales.
            </p>
          </div>
          <div class="col-md-6">
              <div class="col-md-12 col-sm-6">
                <p><br><br><br><br><br>
                  <img src="{{asset('/img/mision.png')}}" class="img-fluid" />
                </p>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="col-md-12 col-sm-6">
                <p><br><br>
                  <img src="{{asset('/img/vision.jpg')}}" class="img-fluid" />
                </p>
              </div>
          </div>
          <div class="col-md-6">
            <br><br><br><br><br>
            <h1>Visión</h1>
            <p>Ser la mejor opción en pasteles y postres, con un equipo humano competente y capaz, aprovechando las oportunidades para crecer ordenadamente e impulsar el bienestar de quienes participamos con TARTAMIEL y nuestro entorno.
            </p>
          </div>
        </div>
        <br><br><br>
        
    </section>
    <br>
    <footer id="footer" class="bg-dark text-light text-center">
        <div class="container-fluid mb-4 p-4">
            <div class="mx-auto w-50">&copy;<script>document.write(new Date().getFullYear())</script>  Hecho con <i class="fa fa-heart heart" alt="love"></i> Por CakeCustom</div>
        </div>
    </footer>
    <!--Scripts 4 bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>