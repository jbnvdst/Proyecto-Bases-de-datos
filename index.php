<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="styles/styles_login.css">
    <title>Gestor de Streaming - Inicio de Sesión</title>
</head>
<body>

    <form action="login.php" method="POST">
        <h2>Iniciar Sesión</h2>

        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" >Iniciar Sesión</button>
    </form>

</body>
</html>
