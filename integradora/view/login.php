
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clima WebApp</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0&appId=1095123481274092&autoLogAppEvents=1" nonce="psoy1GkZ"></script>
<div class="container" style="width: 400px; margin-top:150px;">
	<h2 class="text-center">Inicio</h2>
	<p> Ingrese su correo y contraseña </p>
		<div class="form-group">
			<div id="error"></div>
			<label for="usr">correo:</label>
			<input type="text" class="form-control" id="em" name="correo" required> </div>
		<div class="form-group">
			<label for="contraseña">Contraseña</label>
			<input type="password" class="form-control" id="pwd" name="Contraseña" required>
		</div>
		<button type="button" id="submit" class="btn btn-primary">LOGIN</button>
		<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
		
</div>
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var correo = $("#em").val();
			var contraseña = $("#pwd").val();

				if (correo == ""|| contraseña == ""){
					$("#error").text("Campos vacios");
					$("#error").css("color","red");
				}
				else
				{
					$.post("../controller/login.php",
					{
						correo: correo,
						contraseña: contraseña
					},
					function(data,status){

					var obj = JSON.parse(data);
						if(obj.estado == true)
						{
							window.location.replace("index.html");
						}
						else if(obj.estado == false){
							$("#error").text("Error al iniciar session");
							$("#error").css("color","red");
						}
					});
				}
		});
	});
</script>
	
</div>

</body>
</html>