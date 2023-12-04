<div class="panel">
    <div class="sobre-nosotros">
        <h1 class="fondo">¿Quienes somos?</h1>
        <p class="fondo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur corrupti ducimus illo saepe voluptates ut mollitia pariatur nesciunt veritatis nemo. Ipsa minus, aperiam eius nihil deserunt amet tempore id laboriosam?</p>
    </div>
</div>
<main class="catalogo">
    <h1 class="titulo">Apoya ideas innovadoras!</h1>
    <div class="contenedor">
        <?php foreach ($proyectos as $proyecto) : ?>

            <?php
            $ingresoCorrespondiente;
            foreach ($ingresos as $ingreso) {
                if ($ingreso->idproyectos == $proyecto->id) {
                    $ingresoCorrespondiente = $ingreso;
                    break;
                }
            }
            ?>

            <a href="/Descripcion?id=<?php echo $ingresoCorrespondiente->id; ?>">
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
    <a class="boton" href="/Catalogo">Ver más Proyectos</a>
</main>