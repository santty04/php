<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  body{
    background-color:#000;
    color:#fff;
  }
  div.mb-3,
  div.input-group,
  select.form-select{
    margin: 20px auto;
    text-align: center;
  }
  
</style>
<head>
  <title>Problema</title>
</head>

<body>

  <form action="pagina2.php" method="post">
  <div class="mb-3">
  <h1>Alta de Alumnos</h1>
      <div class="input-group flex-nowrap" style="width: 30rem;">
    <span class="input-group-text" id="addon-wrapping">Name</span>
    <input type="text"  name="nombre" class="form-control" placeholder="Ingrese nombre:" aria-label="Username" aria-describedby="addon-wrapping" required>
  </div>
      <div class="input-group flex-nowrap" style="width: 30rem;">
    <span class="input-group-text" id="addon-wrapping">@</span>
    <input type="email" name="mail" class="form-control" placeholder="Ingrese Email:" aria-label="Username" aria-describedby="addon-wrapping" required>
  </div>
      Seleccione el curso:
      <select name="codigocurso">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select codigo,nombrecurso from curso") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
      }
      ?>
    </select>
      <br>
      <input type="submit" value="Registrar" class="btn btn-primary">
      <br>
      <br>
      
    </form>
    <form action="pagina3.php">
    <input type="submit" value="registrados" class="btn btn-primary">
  </form>
  <form action="Principal.php">
    <input type="submit" value="inicio" class="btn btn-primary">
  </form>
</div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>


</html>