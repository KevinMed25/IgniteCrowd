<div class="contenedor">
    <div class="formulario-iniciar-sesion">
        <h1>Inicio de sesión</h1>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="post">
            <div class="nombre-usuario">
                <input type="email" id="email" name="email">
                <label for="email">Email</label>
            </div>

            <div class="contrasenia">
                <input type="password" id="password" name="password">
                <label for="password">Contraseña</label>
            </div>

            <div class="recordar-contrasenia">
                ¿Olvidó su contraseña?
            </div>
            <input type="submit" value="Iniciar">
            <div class="registrarse">
                ¿Aún no te haz registrado? <a href="/Registro">Regístrate</a>
            </div>
        </form>
    </div>
</div>