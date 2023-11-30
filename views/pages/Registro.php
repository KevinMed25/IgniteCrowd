<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrarse</title>
    <link rel="stylesheet" type="text/css" href="EstiloRegistro.css">
</head>
<body>
    <div class="formulario-registro">
        <h1>Regístrate</h1>
        <form method="post">
            <div class="nombre-usuario">
                <input type="text" required>
                <label for="nombres-usuario">Nombre(s)</label>
            </div>
            <div class="primer-apellido">
                <input type="text" required>
                <label for="primer-apellido">Primer apellido</label>
            </div>
            <div class="segundo-apellido">
                <input type="text" required>
                <label for="segundo-apellido">Segundo Apellido</label>
            </div>
            <div class="correo-usuario">
                <input type="text" required>
                <label for="correo-usuario">Correo</label>
            </div>
            <div class="password-usuario">
                <input type="text" required>
                <label for="password-usuario">Contraseña</label>
            </div>
            <div class="confirmar-password">
                <input type="text" required>
                <label for="confirmar-password">Confirmar contraseña</label>
            </div>
            <div class="aceptar-terminos">
                <input type="checkbox" required>
                <label>Aceptar los Términos y Condiciones</label>
            </div>
            <input type="submit" value="registrarse">
            <div  class="iniciar-sesion">
                Ya soy usuario/ <a href="IniciarSesion.html">Iniciar Sesión</a>
            </div>
        </form>
    </div>
</body>
</html>