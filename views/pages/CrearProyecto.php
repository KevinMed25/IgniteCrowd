<div class="contenedor-crear">
    <div class="titulo">
        <h1>Cuéntanos tu proyecto</h1>
    </div>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <h2>Información básica</h2>
            <label for="nombre">Nombre(s)</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre" id="usuario">

            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno" placeholder="Escribe..." id="primerApellido">

            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno" placeholder="Escribe..." id="segundoApellido">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Escribe tu teléfono" id="telefono">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Escribe tu email" id="email">
        </fieldset>

        <fieldset>
            <legend>Tu Proyecto</legend>
            <h2>Datos del proyecto</h2>

            <label for="nombre_proyecto">Título del proyecto</label>
            <input type="text" id="nombre_proyecto" placeholder="Escribe...">

            <label for="descripcion">Descripción</label>
            <textarea placeholder="Escribe..." id="descripcion"></textarea>

            <label for="financiacion">Meta de financiación</label>
            <input type="number" name="total_a_financiar" id="financiacion" placeholder="Escribe...">

            <label for="categoria">Categoría</label>
            <div class="selector-categoria">
                <select name="categoria" class="categoria">
                    <option class="opcion" value="">Todas las categorías...</option>
                    <option class="opcion" value="categoria1">Libros</option>
                    <option class="opcion" value="categoria2">Manga</option>
                    <option class="opcion" value="categoria3">Música</option>
                </select>
            </div>
            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" placeholder="Escribe...">

            <div class="campos-img">
                <label for="imagenPortada">Seleccione una imagen de portada:</label>
                <input type="file" id="imagenPortada" name="imagenPortada" accept="image/*">
                <br><br>
                <label for="imagenDescrip">Seleccione una imagen de descripción:</label>
                <input type="file" id="imagenDescrip" name="imagenDescrip" accept="image/*">
            </div>

        </fieldset>

        <div class="botones-confirmar">
            <a href="#"><input class="boton-crear" type="reset" value="Cancelar"></a>
            <a href="#"><input class="boton-crear" type="submit" value="Confirmar"></a>
        </div>

    </form>
</div>