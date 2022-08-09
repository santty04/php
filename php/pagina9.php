<html>

<head>
  <title>Problema</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        background-color:#000;
        color: #fff;
    }
</style>
<body>
    <div class="d-grid gap-2 col-6 mx-auto container text-center">
        <div class="row">
        <div class="col align-self-center">
    <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
  die("Problemas con la conexión");
  
  $registros = mysqli_query($conexion, "select count(alu.codigo) as cantidad,
  nombrecurso,
  codigocurso 
  from alumnos as alu
  inner join curso as cur on cur.codigo=alu.codigocurso
  group by alu.codigocurso") or
  die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg = mysqli_fetch_array($registros)) {
      echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
      echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
      $registros2 = mysqli_query($conexion, "select nombre 
      from alumnos 
      where codigocurso=$reg[codigocurso]") or
      die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg2 = mysqli_fetch_array($registros2)) {
          echo $reg2['nombre'] . "-";
        }
        echo "<hr>";
    }
    mysqli_close($conexion);
    ?>
    <form action="Principal.php">
        <input type="submit" value="Inicio" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
</body>

</html>