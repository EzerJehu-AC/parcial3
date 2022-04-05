<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2>Borrar cita</h2>
    <p>Si no tiene su id de su cita, busque en el apartado de ver citas </p>
    <div class="form-group">
      <label for="usr">ID CITA:</label>
      <input type="text" class="form-control" id="id" name="idcita" required>
    </div>
    <button type="Button" id="submit" class="btn btn-primary">Borrar cita</button>
  </div>
<script>
  $(document).ready(function(){
    $("#submit").click(function(){
      var idcita = $("#id").val();

      if (idcita == ""){
        alert("introduzca su id de su cita");
          }
          else{
            $.post("../controller/delete.php",
            {
             idcita: idcita
           },
            function(data,status){
              console.log(data);
              alert("data: " + data +" \nStatus:" + status);
        });
      }
  });
});
</script>
</body>
</html>