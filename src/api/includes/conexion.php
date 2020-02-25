<?php
$serverNombre = "localhost";
$userNombre = "root";
$password = "";
$dbNombre = "PW-2020-G05";
// Crear la conexión
$conexion = mysqli_connect($serverNombre, $userNombre, $password, $dbNombre);

mysqli_query($conexion,'SET NAMES utf8');
