<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >

    <title>Crear usuario.</title>
  </head>
  <body>
    
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
    <div class="top-right">
            <a href="/">Inicio&NonBreakingSpace;</a>
            <a href="/user/loginPage">&NonBreakingSpace;Ingresar</a>
        </div>
    
      <div class="centered-div">
        
        <div class="col-6">
            <form class="form-border form-color" action="/user" method="post">
        
         
            <h3 class="login-title">Registro</h3>
          
          
          <div class="row">
              <div class="col">
                <div class="form-group">
                    <label>RUT</label>
                    <input type="text" name="RUT" autocomplete="off" value="{{ old('RUT') }}" class="form-control" />
                </div>
              </div>
            
              <div class="col">
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" autocomplete="off" value="{{ old('password') }}" class="form-control" />
                </div>
              </div>

              <div class="w-100"></div>

              <div class="col">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" autocomplete="off" value="{{ old('nombre') }}" class="form-control" />
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" autocomplete="off" value="{{ old('email') }}" class="form-control" />
                </div>
              </div>

              <div class="w-100"></div>

              <div class="col">
                <div class="form-group">
                    <label>Número telefónico</label>
                    <input type="text" name="telefono" autocomplete="off" value="{{ old('telefono') }}" class="form-control" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fechaDeNacimiento" value="{{ old('fechaDeNacimiento') }}" class="form-control" />
                </div>
              </div>

              <div class="w-100"></div>

              <div class="col">
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="direccion" autocomplete="off" value="{{ old('direccion') }}" class="form-control" />
                </div>
              </div>
          
              <div class="col-md-6">
                <div class="form-group">
                  <label>Rol</label>
                  <select name="Rol" class="form-control">
                     <option value="Arrendatario">Arrendatario</option>
                     <option value="Arrendador">Arrendador</option>
                     <option value="Administrador">Administrador</option>
                  </select>
                </div>
              </div>
              
              <div class="w-100"></div>

              <div class="col-md-auto">
                <div class="form-group">
                    <input type="submit" name="create" class="btn btn-primary" value="Confirmar" />  
                </div>
              </div>

              

              

            </div>
        </div>
          

      </form>
      

     
      

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>