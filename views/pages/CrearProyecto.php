<div class="contenedor-crear">
    <div class="titulo">
        <h1>Cuéntanos tu proyecto</h1>
    </div>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <h2>Información básica</h2>
            <label for="nombreUsuario">Nombre de usuario</label>
            <input type="text" name="nombreUsuario" placeholder="Escribe tu nombre" id="usuario">

            <label for="email">Email</label>
            <input type="email" placeholder="Escribe tu email" id="email">

            <label for="tel">Teléfono</label>
            <input type="tel" placeholder="Escribe tu teléfono" id="tel">

        </fieldset>

        <fieldset>
            <legend>Tu Proyecto</legend>
            <h2>Datos del Proyecto</h2>

            <label for="proyecto">Título del proyecto</label>
            <input type="text" id="proyecto" placeholder="Escribe...">

            <label for="decrip">Descripción</label>
            <textarea placeholder="Escribe una descripción..." id="descrip"></textarea>

            <label for="objetivo">Objetivo de financiación</label>
            <textarea placeholder="Cuéntanos tus objetivos..." id="objetivo"></textarea>

            <label for="financiacion">Meta de financiación</label>
            <input type="number" id="financiacion" placeholder="Escribe...">

            <label for="categoria">Categoría</label>
            <div class="selector-categoria">
                <select name="categoria" id="categoria">
                    <option class="opcion" value="">Todas las categorías...</option>
                    <option class="opcion" value="categoria1">Libros</option>
                    <option class="opcion" value="categoria2">Manga</option>
                    <option class="opcion" value="categoria3">Música</option>
                </select>
            </div>
            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" placeholder="Escribe...">

            <label for="imagenPortada">Seleccione una imagen de portada:</label>
            <input type="file" id="imagenPortada" name="imagenPortada" accept="image/*">
            <br><br>
            <label for="imagenDescrip">Seleccione una imagen de descripción:</label>
            <input type="file" id="imagenDescrip" name="imagenDescrip" accept="image/*">

        </fieldset>

        <div class="botones-confirmar">
            <a href="#"><input class="boton-crear" type="reset" value="Cancelar"></a>
            <a href="#"><input class="boton-crear" type="submit" value="Confirmar"></a>
        </div>

    </form>
</div>