<div class="contenedor-crear">
    <div class="titulo">
        <h1>Cuéntanos tu proyecto</h1>
    </div>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información Personal</legend>
            <h2>Información básica</h2>
            <label for="nombre">Nombre(s)</label>
            <input type="text" name="usuario[nombre]" placeholder="Escribe tu nombre" id="usuario">

            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="usuario[apellido_paterno]" placeholder="Escribe..." id="primerApellido">

            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="usuario[apellido_materno]" placeholder="Escribe..." id="segundoApellido">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="usuario[telefono]" placeholder="Escribe tu teléfono" id="telefono">

            <label for="email">Email</label>
            <input type="email" name="usuario[email]" placeholder="Escribe tu email" id="email">
        </fieldset>

        <fieldset>
            <legend>Tu Proyecto</legend>
            <h2>Datos del proyecto</h2>

            <label for="nombre_proyecto">Título del proyecto</label>
            <input type="text" id="nombre_proyecto" name="proyecto[nombre_proyecto]" placeholder="Escribe...">

            <label for="descripcion">Descripción</label>
            <textarea placeholder="Escribe..." id="descripcion" name="proyecto[descripcion]"></textarea>

            <label for="financiacion">Meta de financiación</label>
            <input type="number" name="proyecto[total_a_financiar]" id="financiacion" placeholder="Escribe...">

            <label for="categoria">Categoría</label>
            <div class="selector-categoria">
                <select name="proyecto[categoria]" class="categoria">
                    <option class="opcion" value="">Todas las categorías...</option>
                    <option class="opcion" value="categoria1">Libros</option>
                    <option class="opcion" value="categoria2">Manga</option>
                    <option class="opcion" value="categoria3">Música</option>
                </select>
            </div>
            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" placeholder="Escribe..." name="proyecto[ciudad]">

            <div class="campos-img">
                <label for="imagenPortada">Seleccione una imagen de portada:</label>
                <input type="file" id="imagenPortada" name="proyecto[portada]" accept="image/*">
                <br><br>
                <!-- <label for="imagenDescrip">Seleccione una imagen de descripción:</label>
                <input type="file" id="imagenDescrip" name="proyecto[img_descripcion]" accept="image/*"> -->
            </div>

        </fieldset>

        <div class="botones-confirmar">
            <input class="boton-crear" type="reset" value="Cancelar">
            <input class="boton-crear" type="submit" value="Confirmar">
        </div>

    </form>
</div>