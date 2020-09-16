<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userData.css')}}" >
    <title>HOME</title>
</head>
<body>
    <div id="home">
        <h3 class="text-center text-white pt-5">HOME</h3>
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" action="/form" method="get">
                            <h3 class="text-center text-info">DATOS USUARIO</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Nombre</label>
                                <ul>{{$data->nombre}}</ul>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">RUT</label>
                                <ul>{{$data->RUT}}</ul>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">MAIL</label>
                                <ul>{{$data->email}}</ul>
                            </div>
                            <a href="form"><button class="btn btn-info btn-md">Registrar un aviso</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <li>{{$data->nombre}}</li>
    <li>{{$data->RUT}}</li>
    <li>{{$data->email}}</li>
   
</body>
</html>