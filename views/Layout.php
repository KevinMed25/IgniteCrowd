
<?php 
    if(!isset($_SESSION)) {
        session_start();//verfiicar si la session ya existia, si no, inicia
    }
    $auth = $_SESSION['login'] ?? false;

    // if (!isset($principal)) {
    //     $principal = false;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/src/css/estilos.css">
</head>
<body>
    <header>
        <ul class="navegacion">
            <li><a href="/Catalogo" class="enlace">Explorar</a></li>
            <li><a class="enlace" href="#">Empieza tu proyecto</a></li>
            <li>
                <a href="/">
                    <div class="logo-container">
                        Ignite<span>Crowd</span>
                    </div>
                </a>
            </li>
            <li><a  class="enlace" href="#">Registrarse</a></li>
            <li><a  class="enlace" href="#">Iniciar sesión</a></li>
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