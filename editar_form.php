<?php
    include('includes/db.php');

    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }

    $id = $_GET['id'];

    $sql = "select * from usuarios where id = $id";

    $usuario = DB::query($sql);

    $usuario = mysqli_fetch_object($usuario);

    //if($usuario == false){
    if(!$usuario){
        echo "El usuario no existe";
        die;
    }
	$activo ="";
	$inactivo="";
	if ($usuario->estado == 1){
		
		$activo="selected";
	}else{
		$inactivo= "selected";
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="actualizar_usuario.php" method="post">
        <div>
            <h3>Editar Usuarios </h1>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $usuario->id ?>">
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?= $usuario->nombre ?>">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" name="apellido" value="<?= $usuario->apellido ?>">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $usuario->email ?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" value="">
        </div>
        <div class="form-group">
            <label for="">Estado</label>
							
				<select name="estado">
				<option  <?= $inactivo ?> value ="0">Inactivo</option>
				<option <?= $activo ?> value ="1"> Activo</option>
				</select> 

        </div>

        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>

</body>
</html>