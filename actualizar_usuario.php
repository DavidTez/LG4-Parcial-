<?php
include('includes/db.php');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$estado = $_POST["estado"];
$id=(int)$_POST["id"];


$concatenar="";
if ($password!="") {
	
	$concatenar = "`password`=md5('$password'),";
}
$sql="UPDATE `crud`.`usuarios` SET `nombre`='$nombre', `apellido`='$apellido', `email`='$email', " . $concatenar ." `estado`='$estado' WHERE  `id`=$id;";
DB::query($sql);
echo "asdf";
echo  $sql;
header("location: ver_form.php");
?>