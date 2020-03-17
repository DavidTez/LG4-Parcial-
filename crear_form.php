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
    <form action="crear.php" method="post">
        <div>
            <h3>Crear Usuarios</h1>
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>
</html>