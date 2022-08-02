<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombrecurso from curso") or
    die("Problemas en el select:" . mysqli_error($conexion));

  $registros1 = mysqli_query($conexion, "select count(*) as cantidad from curso") or 
    die("Problemas en el select: " . mysqli_error($conexion));
  $reg1 = mysqli_fetch_array($registros1);
  echo "La cantidad de cursos registrados son :" . $reg1['cantidad'] . "<br>";
  echo "<hr>";
  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>
<form action="Principal.php">
                <input type="submit" value="inicio" class="btn btn-primary">
            </form>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>