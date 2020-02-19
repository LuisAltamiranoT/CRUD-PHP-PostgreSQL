<?php
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$correo=$_POST['correo'];
$codigo=$_POST['codigo'];
$fecha=$_POST['fecha'];

include("conexion.php");

        $sql = "INSERT INTO empleado (nombre, cedula, codigo_reloj, correo, fechanac) VALUES ('".$nombre."', ".$cedula.", ".$codigo.", '".$correo."', '".$fecha."')";
        // Ejecutamos la consulta (se devolverá true o false):
         pg_query( $conexion, $sql );

         header("location: index.php");

?>