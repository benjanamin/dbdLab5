<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >

    <title>Muestra arriendos</title>
  </head>
  <body class="py-4">
    <h3 class="post-title">Historial de arriendos</h3>
    <div class="container">
      @forelse($ordenes as $orden)
      @if($orden->IDUsuario === $user->id)
      <div class="row mb-3">
        <div class="col-6 themed-grid-col name-background">Estado Arriendo: {{ $orden->Estado }}</div>
        <div class="col-3 themed-grid-col price-background">Cantidad arrendada${{ $orden->Cantidad }}</div>
        <div class="col-3 themed-grid-col owner-background">ID Usuario {{ $orden->IDUsuario }}</div>
        <div class="col-3 themed-grid-col owner-background">ID Anuncio {{ $orden->IDAnuncio }}</div>
        <!-- <button type="submit" action = "UserController@showData" class="btn btn-primary">Valorar</button> -->
        <form action="/valoration/showValoration/{{$orden->id}}" method="get"><button>Valorar</button></form>
      </div>
      @endif
      @empty
      <p>No existen arriendos asociados a este usuario.</p>
      @endforelse
    </div>
    <div class="top-right">
            <a href="/">Inicio</a>
            <a href="/advertisement/create">&NonBreakingSpace;Publicar</a>
            <a href="/user/logout">&NonBreakingSpace;Logout</a>
        </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>