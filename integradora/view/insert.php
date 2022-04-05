<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<ul><a href="login.php">Iniciar sesion</a> </ul>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Registrarse </a>
            </div>
        </nav>

<div class="container">
  <br>
  <br>
  <form method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <label for="correo"> Ingrese un correo:</label>
              <input type="text" name="correo" class="form-control" id="correo" placeholder="Ejemplo: pablote12@hotmail.com " required>
            </div>
             <div class="col-md-4 form-group">
            <label for="contraseña"> Ingrese una contraseña:</label>
            <input type="password" class="form-control" id="contraseña" placeholder="Ejemplo: rascadurazunos1122" name="contraseña" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="col-md-4 form-group">
              <label for="nombre">Ingrese su nombre:</label> 
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="col-md-12 form-group">
          <div class="text-center"><button type="button" id="boton" class="btn btn-primary btn-lg">Registrarse.</button></div>
        </div>
      </form>
</div>


        
        
<script>

  $("#boton").click(function(){

   

    var nombre_paciente = document.getElementById('correo').value;
    var fecha = document.getElementById('contraseña').value;
    var descripcion = document.getElementById('nombre').value;


    $.post("../controller/insert.php",
    {
      nombre_paciente: nombre_paciente,
      fecha: fecha,
      descripcion: descripcion
    },
    function(data, status){
      console.log(status);
      console.log(data);
    });

  });

</script>


</body>
</html>