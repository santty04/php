<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombrecurso from curso") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del curso:<a href=\"pagina7.php?codigo=$reg[codigo]\">" . $reg['nombrecurso'] . "</a><br>";
    echo "<hr>";
  }

  mysqli_close($conexion);

  if($_GET) {
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select nombre from alumnos where codigocurso=$_REQUEST[codigo]") or
    die("Problemas en el select:" . mysqli_error($conexion));

    echo "Alumnos inscriptos a dicho curso<br>";
    while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['nombre'] . " - ";
  }
  }
  ?>
<form action="Principal.php">
        <input type="submit" value="Inicio" class="btn btn-primary">
    </form>
</body>

</html>