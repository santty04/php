<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");
  $registros = mysqli_query($conexion, "select alu.codigo,nombre,mail, nombrecurso
    from alumnos as alu
    inner join curso as cur on cur.codigo=alu.codigocurso where mail='$_REQUEST[mail]'") or
      die("Problemas en el select:" . mysqli_error($conexion));

      while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
      }
    
    
  $registros1 = mysqli_query($conexion, "select * from alumnos
    where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));    
    if ($regalu = mysqli_fetch_array($registros1)) {
      ?>
          
          <form action="pagina3.php" method="post">
            Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre'] ?>"><br>
            Mail: <input type="text" name="mail" value="<?php echo $regalu['mail'] ?>"><br>
            <input type="hidden" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
            <select name="codigocurso">
      
          <?php
            $registros1 = mysqli_query($conexion, "select * from curso") or
              die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros1)) {
              if ($regalu['codigocurso'] == $reg['codigo'])
                echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
              else
                echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
            }
            mysqli_close($conexion);
            ?>
        </select>
        <br>
        <input type="submit" value="Modificar">
      </form>
    <?php
    } else
      echo "No existe alumno con dicho mail";
      ?>

  


  
    <form action="../Principal.php">
    <input type="submit" value="inicio" class="btn btn-primary">
  </form>
</body>

</html>