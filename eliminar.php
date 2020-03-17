<?php
include('includes/db.php');
$id=(int)$_GET["id"];
$sql="DELETE FROM `crud`.`usuarios` WHERE  `id`='$id';";
DB::query($sql);
header("location: ver_form.php");
?>