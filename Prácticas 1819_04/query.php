<?php

include "conexion.php";

error_reporting(0);

$estado = "Select * From estado ORDER BY NomEstado";
$consultaE = $conexion -> query($estado);
$Testados = $estado -> num_rows;

$usuarios = "Select * From usuarios Where id_Usuario" ;
$executeuser = $conexion -> query($usuarios);
$duser = $executeuser -> fetch_array();

$duser ['Nombre'];
$duse ['Apellidos'];

?>