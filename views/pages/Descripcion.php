<main class="catalogo">
    <h1 class="titulo-descripcion"><?php echo $proyecto->nombre_proyecto; ?></h1>

    <div class="contenedor-descripcion">
        <div class="texto-descripcion">
            <?php echo $proyecto->descripcion; ?>
        </div>
        <article class="card-descripcion">
            <div class="imagen">
                <img src="/images/<?php echo $proyecto->portada; ?>">
            </div>
            <div class="info-proyecto">
                <h2><?php echo $proyecto->nombre_proyecto; ?></h2>
                <p><span class="backers"><?php echo $proyecto->num_backers; ?> </span><br>Backers</p>
                <p><span class="cifra"><?php echo $ingresos->ingresos; ?> </span><br>De $<?php echo $proyecto->total_a_financiar; ?></p>
            </div>
        </article>
    </div>
    <div class="barra-informacion">
        <div class="info">
            <h2>Autor:</h2>
            <p class="backers"><?php echo $usuario->nombre; ?></p>
        </div>
        <div class="info">
            <h2>Categoría:</h2>
            <p class="backers"><?php echo $proyecto->categoria; ?></p>
        </div>
        <div class="info">
            <h2>Creado en:</h2>
            <p><span class="backers"><?php echo $proyecto->ciudad; ?></p>
        </div>
        <div class="info">
            <h2>Aportaciones:</h2>
            <p><span class="backers"><?php echo $proyecto->num_backers; ?></p>
        </div>
        <div class="info">
            <h2>Cantidad recaudada:</h2>
            <p><span class="backers">$<?php echo $ingresos->ingresos; ?></span><br>De $<?php echo $proyecto->total_a_financiar; ?></p>
        </div>
    </div>
</main>