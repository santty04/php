<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        background-color:#000;
    }
    input.btn{
        margin: 20px auto;
    }
    input.rojo{
        background: red;
        border:none;
    }
</style>
    <body>
        <section>
        <div class="d-grid gap-2 col-6 mx-auto container text-center">
        <div class="row">
        <div class="col align-self-center">
            <form action="pagina1.php">
                <input type="submit" value="registrar usuarios" class="btn btn-primary">
            </form>
            <form action="pagina3.php">
                <input type="submit" value="usuarios registrados" class="btn btn-primary">
            </form>
            <form action="pagina5.php">
                <input type="submit" value="registrar curso" class="btn btn-primary">
            </form>
            <form action="pagina7.php">
                <input type="submit" value="cursos registrados" class="btn btn-primary">
            </form>
            </form>
            <form action="consultas/pagina1.php">
                <input type="submit" value="Consulta por correo" class="btn btn-primary">
            </form>
            <form action="borrar/pagina1.php">
                <input type="submit" value="Borrar registros por Email" class="btn btn-primary">
            </form>
            <form action="borrar/pagina3.php">
                <input type="submit" value="Borrar Todos registros " class="btn btn-primary rojo">
            </form>
            <form action="consultaEditar/pagina1.php">
                <input type="submit" value="Editar correos" class="btn btn-primary">
            </form>
            <form action="pagina8.php">
                <input type="submit" value="Correos Antiguos" class="btn btn-primary">
            </form>
            <form action="pagina9.php">
                <input type="submit" value="Cantidad de alumnos por curso" class="btn btn-primary">
            </form>
            <form action="pagina10.php">
                <input type="submit" value="Ver tablas" class="btn btn-primary">
            </form>
        </div>
        </div>
    </div>
        </section>
    </body>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
