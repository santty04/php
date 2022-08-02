<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into curso(nombrecurso) values ('$_REQUEST[nombrecurso]')") or
    die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue dado de alta.";
  ?>
<form action="pagina5.php">
                <input type="submit" value="regresar" class="btn btn-primary">
            </form>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>