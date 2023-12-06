<div class="panel">
    <div class="sobre-nosotros">
        <h1 class="fondo">¿Quienes somos?</h1>
        <p class="fondo">Somos un equipo de apasionados por la cultura y la creatividad que te acompañaremos en toda tu aventura. Con las mejores herramientas, el mayor ecosistema con mecenas entusiastas del crowdfunding y el porcentaje de éxito más alto del mundo! ¿A qué estás esperando?</p>
    </div>
</div>
<main class="catalogo">
    <h1 class="titulo">Apoya ideas innovadoras!</h1>
    <div class="contenedor">
        <?php foreach ($proyectos as $proyecto) : ?>
            <a href="/Descripcion?id=<?php echo $proyecto->id; ?>">
                <article class="card">
                    <div class="imagen">
                        <img src="/images/<?php echo $proyecto->portada; ?>">
                    </div>
                    <div class="info-proyecto">
                        <h2><?php echo $proyecto->nombre_proyecto; ?></h2>
                        <p><span class="backers"><?php echo $proyecto->num_backers; ?> </span><br>Backers</p>
                        <p><span class="cifra">$<?php echo $proyecto->ingresos; ?></span><br>De $<?php echo $proyecto->total_a_financiar; ?></p>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </div>
    <a class="boton" href="/Catalogo">Ver más Proyectos</a>
</main>