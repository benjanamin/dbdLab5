<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Editar anuncio</title>
  </head>
  <body>
      <div class="container">
          <h1>
              Editar anuncio
          </h1>
      </div>
      <form action="/advertisement/{{ $ad->id }}" method="POST">
        @method('PATCH')

        <div>
            <label for="Titulo">Título</label>
            <input type="text" name="Titulo" value="{{ $ad->Titulo }}">
        </div>

        <div>
            <label for="Cantidad">Cantidad</label>
            <input type="number" min="0" name="Cantidad" value="{{ $ad->Cantidad }}">
        </div>

        <div>
            <label for="PrecioUnitario">Precio por unidad</label>
            <input type="text" name="PrecioUnitario" value="{{ $ad->PrecioUnitario }}">
        </div>

        <div>
            <label for="Descripcion">Descripción</label>
            <input type="text" name="Descripcion" value="{{ $ad->Descripcion }}">
        </div>
        <div>
            <label for="Categoria">Categoría</label>
            <select name="Categoria">
                <option value="Inmobiliaria">Inmobiliaria</option>
                <option value="Muebles">Muebles</option>
                <option value="Artículos de camping">Artículos de camping</option>
                <option value="Herramientas">Herramientas</option>
                <option value="Espacios">Espacios</option>
                <option value="Vehículos">Vehículos</option>
            </select> 
        </div>
        <button>Confirmar modificación</button>
       </form>
       
       <br />
        @if($errors->any())
            <div class="alert alert-danger">
                <ul> <!-- lista no ordenada (unordered list) -->
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li> <!-- elemento de la lista (list item) -->
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>