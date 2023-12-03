<?php
if (!isset($_SESSION)) {
    session_start(); //verfiicar si la session ya existia, si no, inicia
}
$auth = $_SESSION['login'] ?? false;

if (!isset($isRegistro)) {
    $isRegistro = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IgniteCrowd</title>
    <?php if ($isRegistro) { ?>
        <link rel="stylesheet" href="/src/css/estilosFormularios.css">
    <?php } else { ?>
        <link rel="stylesheet" href="/src/css/estilos.css">
    <?php }; ?>
</head>

<body>
    <header>
        <ul class="navegacion">
            <li><a href="/Catalogo" class="enlace">Explorar</a></li>
            <li><a class="enlace" href="/CrearProyecto">Empieza tu proyecto</a></li>
            <li class="logo-container">
                <a href="/">
                    <div class="logo-container">
                        Ignite<span>Crowd</span>
                    </div>
                </a>
            </li>
            <li><a class="enlace" href="/Registro">Registrarse</a></li>
            <li><a class="enlace" href="/IniciarSesion">Iniciar sesión</a></li>
        </ul>
    </header>

    <!-- Mostrar contenido de forma dinámica -->
    <?php echo $contenido ?>

    <footer class="footer">
        <h2>IgniteCrowd</h2>
        <a href="/PreguntasFrecuentes" class="botones-footer">Preguntas frecuentes</a>
        <a href="/AyudaAutores" class="botones-footer">Ayuda para autores</a>
        <div class="boton-cookies">
            <a href="#" class="botones-footer">Cookies</a>
        </div>
    </footer>
</body>

</html>