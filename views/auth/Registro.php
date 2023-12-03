<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrarse</title>
    <link rel="stylesheet" type="text/css" href="estilosFormularios.css">
</head>

<div class="contenedor">
    <div class="formulario-registro">
        <h1>Regístrate</h1>
        <form method="post">
            <div class="nombre-usuario">
                <input type="text" id="nombreUsuario" required>
                <label for="nombreUsuario">Nombre(s)</label>
            </div>
            <div class="primer-apellido">
                <input type="text" id="primerApellido" required>
                <label for="primerApellido">Primer apellido</label>
            </div>
            <div class="segundo-apellido">
                <input type="text" id="segundoApellido" required>
                <label for="segundoApellido">Segundo Apellido</label>
            </div>
            <div class="tel-usuario">
                <input type="tel" id="telUsuario" required>
                <label for="telUsuario">Teléfono</label>
            </div>
            <div class="correo-usuario">
                <input type="text" id="correoUsuario" required>
                <label for="correoUsuario">Correo</label>
            </div>
            <div class="contrasenia-usuario">
                <input type="text" id="passwordUsuario" required>
                <label for="passwordUsuario">Contraseña</label>
            </div>
            <div class="confirmar-contrasenia">
                <input type="text" id="confirmarPassword" required>
                <label for="confirmarPassword">Confirmar contraseña</label>
            </div>
            <div class="aceptar-terminos">
                <input type="checkbox" required>
                <label>Aceptar los Términos y Condiciones</label>
            </div>
            <input type="submit" value="Registrarse">
            <div  class="iniciar-sesion">
                Ya soy usuario/ <a href="IniciarSesion.html">Iniciar Sesión</a>
            </div>
        </form>
    </div>
</div>
</html>