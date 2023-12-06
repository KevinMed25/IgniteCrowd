
<div class="contenedor">
    <div class="formulario-registro">
        <h1>Regístrate</h1>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" action="/ValidarUsuario.php" id="formulario-registrarse" onsubmit="return validarUsuario()">
            <div class="nombre-usuario">
                <input type="text" id="nombreUsuario" name="usuario[nombre]" required>
                <label for="nombreUsuario">Nombre(s)</label>
            </div>
            <div class="primer-apellido">
                <input type="text" id="primerApellido" name="usuario[apellido_paterno]" required>
                <label for="primerApellido">Primer apellido</label>
            </div>
            <div class="segundo-apellido">
                <input type="text" id="segundoApellido" name="usuario[apellido_materno]" required>
                <label for="segundoApellido">Segundo apellido</label>
            </div>
            <div class="tel-usuario">
                <input type="tel" id="telUsuario" name="usuario[telefono]" required>
                <label for="telUsuario">Teléfono</label>
            </div>
            <div class="correo-usuario">
                <input type="text" id="correoUsuario" name="usuario[email]" required>
                <label for="correoUsuario">Correo</label>
            </div>
            <div class="contrasenia-usuario">
                <input type="text" id="passwordUsuario" name="usuario[password]" required>
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
                Ya soy usuario/ <a href="/IniciarSesion">Iniciar Sesión</a>
            </div>
        </form>
    </div>
</div>