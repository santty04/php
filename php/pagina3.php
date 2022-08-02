<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alu.codigo as codigo,
                                          nombre,
                                          mail,
                                          
			                  codigocurso, 
                                          nombrecurso 
                                     from alumnos as alu
                                     inner join curso as cur on cur.codigo=alu.codigocurso") or
    die("Problemas en el select:" . mysqli_error($conexion));

  $registros1 = mysqli_query($conexion, "select count(*) as cantidad from alumnos") or 
    die("Problemas en el select: " . mysqli_error($conexion));
  $reg1 = mysqli_fetch_array($registros1);
  echo "La cantidad de alumnos inscritos son :" . $reg1['cantidad'] . "<br>";
  echo "<hr>";
  
  
  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>