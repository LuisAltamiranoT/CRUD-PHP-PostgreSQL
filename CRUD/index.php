
<?php
include("conexion.php");
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6 center-block">
    <h4>CRUD</h4>

<form action="crear.php" method="post">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre"  placeholder="Ingrese nombre">
  </div>
  <div class="form-group">
    <label for="cedula">Cédula</label>
    <input type="numeric" class="form-control" name="cedula"  placeholder="Ingresar cédula">
  </div>
  <div class="form-group">
    <label for="codigo">Código reloj</label>
    <input type="numeric" class="form-control" name="codigo" placeholder="Ingrese código reloj">
  </div>
  <div class="form-group">
    <label for="correo">Correo electrónico</label>
    <input type="mail" class="form-control" name="correo"  placeholder="Ingrese e-mail">
  </div>
  <div class="form-group">
    <label for="fecha">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name = "fecha"  placeholder="dd/mm/aaaa">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
  </div>
</div>


<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Editable table</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">CÉDULA</th>
            <th class="text-center">CÓDIGO RELOJ</th>
            <th class="text-center">CORREO</th>
            <th class="text-center">FECHA NACIMIENTO</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
     
<?php
$sql = "SELECT * FROM empleado;";
// Ejecutamos la consulta (se devolverá true o false):
 $resultado = pg_query( $conexion, $sql);

 while ($row = pg_fetch_row($resultado)) {
     ?>
        <tr>
        <form action="actualizar.php" method="post">
        <input type = "hidden" name="id_actualizar" value="<?php echo "$row[0]"; ?>">
            <td><?php echo "$row[0]"; ?></td>
            <td><input name="nombre" type="text" value="<?php echo "$row[1]"; ?>"/></td>
            <td><input name="cedula" type="text" value="<?php echo "$row[2]"; ?>"/></td>
            <td><input name="codigo" type="text" value="<?php echo "$row[3]"; ?>"/></td>
            <td><input name="correo" type="text" value="<?php echo "$row[4]"; ?>"/></td>
            <td><input name="fecha" type="text" value="<?php echo "$row[5]"; ?>"/></td>
            <td>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </td>
        </form>
        <form action="eliminar.php" method="post">
            <td>
                <input type = "hidden" name="id_eliminar" value="<?php echo "$row[0]"; ?>">
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </td>
        </form>
          </tr>

<?php 
  }
?>


</tbody>
      </table>
    </div>
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>