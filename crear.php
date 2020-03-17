<?php
include('includes/db.php');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$id=(int)$_POST["id"];
$sql="INSERT INTO `crud`.`usuarios` (`nombre`, `apellido`, `email`, `password`) VALUES ('$nombre', '$apellido', '$email', md5('$password'));";
DB::query($sql);
header("location: index.php");
?>