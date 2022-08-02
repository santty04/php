<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "update alumnos
                          set codigocurso=$_REQUEST[codigocurso],
                          nombre='$_REQUEST[nombre]',
                          mail='$_REQUEST[mail]'
                        where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El curso fue modificado con exito";
    ?>
    <form action="../Principal.php">
                <input type="submit" value="regresar" class="btn btn-primary">
            </form>
</body>

</html>