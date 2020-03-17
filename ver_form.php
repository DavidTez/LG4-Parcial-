<?php 
    include('includes/db.php');

    $sql = "select * from usuarios";
    $result = DB::query($sql);
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


			<table style="width: 100%; border: 1px solid black; width: 50%; margin:auto">
				<tr>
					<td colspan=7 style="text-align:center"> vista de usuarios</td>
				</tr>
				<?php while($mostrar=mysqli_fetch_array($result)){ ?>
					<tr>
				  <form action="actualizar_estado.php" method="post">
						<td><?= $mostrar['id'] ?></td>
						<td><?= $mostrar['nombre'] ?></td>
						<td><?= $mostrar['apellido'] ?></td>
						<td><?= $mostrar['email'] ?></td>
						<td>
						 <div class="form-group">
							<input type="hidden" name="id" value="<?= $mostrar['id'] ?>" ></input>
							<select name="estado">
							<option  <?= (!$mostrar['estado'])? "selected":""?> value ="0">Inactivo</option>
							<option  <?= ($mostrar['estado'])? "selected":"" ?> value ="1"> Activo</option>
							</select> 
						</div>
						</td>
						
						<td>
							<button type="submit">actualizar estado</button>
							<a href="editar_form.php?id=<?= $mostrar['id'] ?>">Editar</a>
							<a href="eliminar.php?id=<?= $mostrar['id'] ?>">Eliminar</a>
						</td>
					</form>
					</tr>
				<?php } ?>
			</table>
</body>
</html>