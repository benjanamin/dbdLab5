<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >
    
    <title>Ingreso exitoso</title>
    </head>
    <body>
      <div class="top-right">
        <a href="/">Inicio</a>
     </div>

      <div class="centered-div alert-size">
        @if(isset(Auth::user()->email))
        <div class="alert alert-success success-block">
          <div class="welcome-msg">
            <strong>Bienvenido, {{ Auth::user()->nombre }}</strong>
          </div>
          <div class="row">

            <div class="col start-btn">
              <form action="/advertisement" method="get">
                <button>Ver anuncios</button>
              </form>
            </div>

            <div class="col centered-btn">
              <form action="/advertisement/create" method="get">
                <button>Publicar anuncio</button>
              </form>
            </div>

            <div class="col end-btn">
              <form action="/user/logout" method="get">
                <button>Logout</button>
              </form>
            </div>
          
            
            
        </div>
        @endif      
      </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>