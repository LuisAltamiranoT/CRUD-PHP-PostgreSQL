<?php
$id=$_POST['id_actualizar'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$codigo=$_POST['codigo'];
$fecha=$_POST['fecha'];


$user = "postgres";
$password = "admin";
$dbname = "pruebaJenny";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());

        $sql = "UPDATE empleado SET nombre='".$nombre."',cedula=".$cedula.", codigo_reloj=".$codigo.",correo='".$correo."',fechanac='".$fecha."' WHERE id_emple=$id";    
        // Ejecutamos la consulta (se devolverá true o false):
         pg_query( $conexion, $sql );

         header("location: index.php");

?>