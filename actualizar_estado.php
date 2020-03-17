<?php
include('includes/db.php');
$estado = $_POST["estado"];
$id=(int)$_POST["id"];
$sql="UPDATE `crud`.`usuarios` SET `estado`='$estado' WHERE  `id`=$id;";
DB::query($sql);
header("location: ver_form.php");
?>