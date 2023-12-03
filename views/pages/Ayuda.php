<body>
    <div class="formulario-ayuda">
        <h1>¿Necesitas ayuda?</h1>
        <form method="post">

            <div class="nombre">
                <input type="text" id="nombreUsuario" required>
                <label for="nombreUsuario">Nombre</label>
            </div>

            <div class="asunto">
                <input type="text" id="asunto" required>
                <label for="asunto">Asunto</label>
            </div>

            <div class="correo">
                <input type="text" id="correoUsuario" required>
                <label for="correoUsuario">Correo</label>
            </div>

            <label for="descripcion" class="descrip">¿En qué podemos ayudarte?</label>
            <div class="descripcion">
                <textarea type="text" required id="descripcion" name="descripcion"></textarea>
            </div>

            <input type="submit" value="Enviar mensaje">
            <div class="cerrar">
                <a href="#">Cerrar</a>
            </div>
        </form>
    </div>