<div class="panel-catalogo">
    <div class="sobre-nosotros">
        <h1>¡Ayuda a cumplir sueños!</h1>
    </div>
</div>
<div>
    <div class="filtro-barra">
        <div class="selector">
            <p>Ordenar por:</p>
            <select name="categoria" id="categoria">
                <option class="opcion" value="">Todas las categorías</option>
                <option class="opcion" value="categoria1">Categoría 1</option>
                <option class="opcion" value="categoria2">Categoría 2</option>
                <option class="opcion" value="categoria3">Categoría 3</option>
            </select>
        </div>
        <div class="selector">
            <p>Seleccionar Idioma:</p>
            <select name="idioma" id="idioma">
                <option value="">Todos los idiomas</option>
                <option value="idioma1">Idioma 1</option>
                <option value="idioma2">Idioma 2</option>
                <option value="idioma3">Idioma 3</option>
            </select>
        </div>
        <div class="selector">
            <p>Seleccionar Ciudad:</p>
            <select name="ciudad" id="ciudad">
                <option value="">Ciudad</option>
                <option value="ciudad1">Ciudad 1</option>
                <option value="ciudad2">Ciudad 2</option>
                <option value="ciudad3">Ciudad 3</option>
            </select>
        </div>
    </div>
</div>
<main class="catalogo">
    <div class="contenedor">
        <?php foreach ($proyectos as $proyecto) : ?>

            <?php
            // Buscar ingreso correspondiente
            $ingresoCorrespondiente;
            foreach ($ingresos as $ingreso) {
                if ($ingreso->idproyectos == $proyecto->idproyectos) {
                    $ingresoCorrespondiente = $ingreso;
                    break;
                }
            }
            ?>

            <a href="/proyecto?id=<?php echo $proyecto->idproyectos; ?>">
                <article class="card">
                    <div class="imagen">
                        <img src="/images/<?php echo $proyecto->portada; ?>">
                    </div>
                    <div class="info-proyecto">
                        <h2><?php echo $proyecto->nombre_proyecto; ?></h2>
                        <p><span class="backers"><?php echo $proyecto->num_backers; ?> </span><br>Backers</p>
                        <p><span class="cifra">$<?php echo $ingresoCorrespondiente->ingresos; ?></span><br>De $<?php echo $proyecto->total_a_financiar; ?></p>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </div>
    <!-- <a class="boton" href="#">Ver más Proyectos</a> -->
</main>