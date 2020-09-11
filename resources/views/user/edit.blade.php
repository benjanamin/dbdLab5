<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Editar usuario</title>
  </head>
  <body>
      <div class="container">
          <h1>
              Editar usuario
          </h1>
      </div>
      <form action="/user/{{ $user->id }}" method="POST">
        @method('PATCH')

        <div>
            <label for="RUT">RUT</label>
            <input type="text" name="RUT" value="{{ $user->RUT }}">
        </div>

        <div>
            <label for="nombre">Nombre de usuario</label>
            <input type="text" name="nombre" value="{{ $user->nombre }}">
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="text" name="password" value="{{ $user->password }}">
        </div>

        <div>
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" value="{{ $user->email }}">
        </div>

        <div>
            <label for="telefono">Número telefónico</label>
            <input type="text" name="telefono" value="{{ $user->telefono }}">
        </div>

        <div>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" value="{{ $user->direccion }}">
        </div>

        <div>
            <label for="fechaDeNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fechaDeNacimiento" value="{{ $user->fechaDeNacimiento }}">
        </div>
        <button>Confirmar modificación</button>
       </form>
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>