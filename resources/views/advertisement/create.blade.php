<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >

    <title>Crear anuncio.</title>
  </head>
  <body>

  <div class="top-right">
        <a href="/">Inicio&NonBreakingSpace;</a>
        <a href="/advertisement">&NonBreakingSpace;Anuncios</a>
        <a href="/user/logout">&NonBreakingSpace;Logout</a>
    </div>
  
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


    <div class="centered-div">
            <form class="form-border form-color" action="/advertisement/" method="post">

            <h3 class="post-title">Crear anuncio</h3>

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="Titulo" class="form-control" autocomplete="off" value="{{ old('Titulo') }}" />
            </div>

            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" min="1" name="Cantidad" class="form-control" autocomplete="off" value="{{ old('Cantidad') }}" />
            </div>

            <div class="form-group">
                <label>Precio por unidad</label>
                <input type="text" name="PrecioUnitario" class="form-control" autocomplete="off" value="{{ old('PrecioUnitario') }}" />
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea rows="2" type="text" name="Descripcion" autocomplete="off" class="form-control">{{ old('Descripcion') }}</textarea>
                <!-- textarea no tiene atributo value -->
            </div>

            <div class="form-group">
                <label>Categoría</label>
                <select name="Categoria" class="form-control">
                    <option value="Inmobiliaria">Inmobiliaria</option>
                    <option value="Muebles">Muebles</option>
                    <option value="Artículos de camping">Artículos de camping</option>
                    <option value="Herramientas">Herramientas</option>
                    <option value="Espacios">Espacios</option>
                    <option value="Vehículos">Vehículos</option>
                </select> 
            </div>
            <div class="form-group">
                <input type="submit" name="publish" class="btn btn-primary" value="Publicar anuncio" />  
            </div>
    </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>