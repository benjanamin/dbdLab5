<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

  <title>Valoracion anuncio</title>
</head>

<body>
  <div class="row text-center justify-content-center">
    <div class="col-6 pt-4">
      <form class="form-border form-color">
        <h3 class="login-title">Datos del aviso</h3>

        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <strong>Título</strong>
              <p> {{ $anuncio->Titulo }} </p>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <strong> Cantidad </strong>
              <p> {{ $anuncio->Cantidad }} </p>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <strong> Precio por unidad </strong>
              <p> {{ $anuncio->PrecioUnitario }}</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <strong> Descripción </strong>
              <p> {{ $anuncio->Descripcion }} </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-6 pt-2">
      <form class="form-border form-color" action="/valoration" method="post">
        <h3 class="login-title">Valoracion</h3>

        <div class="row">
          <div class="col-3">
            <div class="form-group">
              <label>ID Anuncio</label>
              <input type="text" name="IDAnuncio" autocomplete="off" value="{{ $anuncio->id }}" class="form-control col" readonly />
            </div>
          </div>

          <div class="col-9">
            <div class="form-group">
              <label>Estrellas</label>
              <select name="Estrellas" class="form-control" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>          
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Titulo</label>
              <input type="text" name="Titulo" autocomplete="off" value="{{ old('Titulo') }}" class="form-control" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Comentario</label>
              <textarea rows="2" type="text" name="Comentario" autocomplete="off" class="form-control">{{ old('Comentario') }}</textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-auto">
            <div>
            <div class="col-md-auto">
                <div class="form-group">
                    <input type="submit" name="create" class="btn btn-primary" value="Confirmar" />  
                </div>
              </div>
              <form action="/advertisement/{{ $anuncio->id }}" method="POST">
                <!-- @method('DELETE') -->
                @csrf
                <!-- <button>Valorar</button> -->
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>