<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos
                          set mail='$_REQUEST[mailnuevo]' 
                        where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El mail fue modificado con exito";
    ?>
</body>
<form action="pagina1.php">
  <input type="submit" value="inicio" class="btn btn-primary">
</form>
</html>