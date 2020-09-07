<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css')}}" >

</head>
<body>
    <form action="{{ action('UserController@store')}}" method="post">
        <div class="container-fluid">
            <section class="container">
                <div class="container-page">				
                    <div class="col-md-6">
                        <h3 class="dark-grey">Registration</h3>
                        
                        <div class="form-group col-lg-12">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" value="">
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" value="">
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <label>Correo</label>
                            <input type="email" name="email" class="form-control" id="email" value="">
                        </div>			
                        
                        <div class="form-group col-lg-6">
                            <label>Telefono</label>
                            <input type="number" name="telefono" class="form-control" id="telefono" value="">
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <label>RUT</label>
                            <input type="text" name="RUT" class="form-control" id="RUT" value="">
                        </div>		
                        <div class="form-group col-lg-12">
                            <label>Direccion</label>
                            <input type="text" name="direccion" class="form-control" id="RUT" value="">
                        </div>	
                        <div class="form-group col-lg-12">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" name="fechaDeNacimiento" class="form-control" id="" value="">
                        </div>
                        
                                    
                    
                    </div>
                
                    <div class="col-md-6">
                        <h3 class="dark-grey">Terms and Conditions</h3>
                        <p>
                            By clicking on "Register" you agree to The Company's' Terms and Conditions
                        </p>
                        <p>
                            While rare, prices are subject to change based on exchange rate fluctuations - 
                            should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
                        </p>
                        <p>
                            Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
                        </p>
                        <p>
                            Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
                        </p>
                        
                        <button type="submit" action = "UserController@showData" class="btn btn-primary">Registrarse</button>
                    </div>
                </div>
            </section>
        </div>
    </form>
</body>
</html>