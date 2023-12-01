<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="EstiloIniciarSesion.css">
</head>
<body>
    <div class="formulario-iniciar-sesion">
        <h1>Inicio de sesión</h1>
        <form method="post">
            <div class="usuario">
                <input type="text" id="usuario" name="usuario" required>
                <label for="username">Nombre de usuario</label>
            </div>
              
            <div class="password">
                <input type="password" id="password" name="password" required>
                <label for="password">Contraseña</label>
            </div>
              
            <div class="recordar-password">
                ¿Olvidó su contraseña?
            </div>
            <input type="submit" value="Iniciar">
            <div class="registrarse">
                ¿Aún no te haz registrado? <a href="Registro.html">Regístrate</a>
            </div>
        </form>
    </div>
    
</body>
</html>