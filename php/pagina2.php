<html>
<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<head>
  
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>
<form action="pagina1.php">
  <input type="submit" value="inicio" class="btn btn-primary">
</form>
<script src="js/bootstrap.bundle.min.js"></script>
</html>