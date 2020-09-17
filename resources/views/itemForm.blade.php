<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css')}}" >
    <title>Publicar aviso</title>
  </head>
  <body>
    <form action="{{ action('AdvertisementController@postAd')}}" method="post">
      <div class="section-1">
        <button class="btn btn-primary text-left" onclick= home()>Inicio</button>
      </div>
      <div class="align-self-center">
        <h1>
          xd
        </h1>

      </div>
    <div class="container-fluid" style='padding-top: 10%; padding-bottom: 10%;'>
      <div class="row align-items-center justify-content-center">
        <div class="col-4">
          <div class="input-group">
            <div class="input-group-prepend form-group">
              <span class="input-group-text">Nombre</span>
            </div>
            <input type="text" name="Titulo" class="form-control" id="Titulo" placeholder="Ingrese título del artículo..." aria-label="Titulo" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend form-group">
              <span class="input-group-text">$</span>
            </div>
            <input type="" name="PrecioUnitario"class="form-control" id="PrecioUnitario" placeholder="Precio/Unidad">
          </div> 
        </div>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-6">
          <div class="input-group">
            <div class="input-group-prepend form-group">
              <span class="input-group-text">Descripción</span>
            </div>
            <textarea name="Descripcion" class="form-group" rows="4" id="Descripcion" placeholder="Ingrese descripción del artículo..."></textarea>       
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend form-group">
              <span class="input-group-text">#</span>
            </div>
            <input type="number" min=1 name="Cantidad" class="form-control" id="Cantidad" placeholder="Cantidad">
          </div>
        </div>
        <div class="col-4">
          <div class="input-group">
            <div class="input-group-prepend form-group">
              <label class="input-group-text" for="Categoria">Categoría</label>
            </div>
            <select name="Categoria" class="custom-select" id="Categoria">
              <option selected>...</option>
              <option value="Inmobiliaria">Inmobiliaria</option>
              <option value="Muebles">Muebles</option>
              <option value="Artículos de camping">Artículos de camping</option>
              <option value="Herramientas">Herramientas</option>
              <option value="Espacios">Espacios</option>
              <option value="Vehículos">Vehículos</option>
            </select>     
          </div>
        </div>
        <button type="submit" action="" class="btn btn-primary text-center">Publicar</button>
    </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</form>  
</body>
</html>