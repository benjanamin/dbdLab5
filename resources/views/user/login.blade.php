<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >

    <title>Login</title>
  </head>
  <body>
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong> <!-- Mostrará alerta de datos de ingreso incorrectos -->
        </div>

        @endif

        @if($errors->any())
        <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
            <ul> <!-- lista no ordenada (unordered list) -->
                @foreach($errors->all() as $error)
                <li>
                    <strong>{{ $error }}</strong>
                </li> <!-- elemento de la lista (list item) -->
                @endforeach
            </ul>
        </div>
        @endif

        <br />

        
    <div class="col-auto">
      <div class="centered-div">          
      <div class="col-4">
          
          <form class="form-border form-color" action="/user/checkLogin" method="post">
              {{ csrf_field() }}
              <div class="col-auto">
                <h3 class="post-title">Login</h3>
              </div>
              
              <div class="col-auto">
                <div class="form-group">
                    <label>Ingresar email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>
              </div>
              
            <div class="col-auto">
                <div class="form-group">
                  <label>Ingresar contraseña</label>
                  <input type="password" name="password" id="password" class="form-control" />
              </div>
            </div>
            
            <div class="col-auto">
                <div class="form-group">
                  <input type="submit" name="login" class="btn btn-primary col-auto" value="Login" />  
              </div>
            </div>              
          </form>
      </div>
      </div>    
    </div>

    <div class="top-right">
            <a href="/">Inicio&NonBreakingSpace;</a>
            <a href="/user/create">&NonBreakingSpace;Registrarse</a>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>