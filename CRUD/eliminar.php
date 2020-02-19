<?php
$id_eliminar=$_POST['id_eliminar'];

$user = "postgres";
$password = "admin";
$dbname = "pruebaJenny";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());

        $sql = "DELETE FROM empleado WHERE id_emple = $id_eliminar";
         pg_query( $conexion, $sql );

         header("location: index.php");
?>