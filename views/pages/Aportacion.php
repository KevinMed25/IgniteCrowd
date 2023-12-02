<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aportación</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <ul class="navegacion">
        <li><a href="./catalogo.html" class="enlace">Explorar</a></li>
        <li><a class="enlace" href="crear.html">Empieza tu proyecto</a></li>
        <li>
            <a href="./index.html">
                <div class="logo-container">
                    Ignite<span>Crowd</span>
                </div>
            </a>
        </li>
        <li><a  class="enlace" href="Registro.html">Registrarse</a></li>
        <li><a  class="enlace" href="IniciarSesion.html">Iniciar sesión</a></li>
    </ul>
    
    <div class="contenedor-aportacion">
        <div class="pago">
            <div class="titulo">
                <h2>Aportación</h2>
            </div>
            <h3 class="subtitulo">Método de pago</h3>
            <div class="informacion">
                <form class="checkbox">
                    <input type="radio" id="tarjeta" name="metodo-pago" value="Tarjeta">
                    <label for="tarjeta">Tarjeta</label>
                    <input type="radio" id="paypal" name="metodo-pago" value="Paypal">
                    <label for="paypal">Paypal</label>
                </form> 
            </div>
            <div class="boton-confirmar">
                <a href="#">
                    <input type="submit" value="Realizar aportación">
                </a>
            </div>
        </div>
        
        <div class="proyecto">
            <div class="nombre">
                <h2>Nombre del proyecto seleccionado</h2>
            </div>
            <div class="contenedor-imagen" alt="imagen-proyecto">
                <img src="./img/gato.jfif" class="imagen-proyecto">
            </div>
            <div class="descripcion">
                <h3>Descripción</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis nisl quam. Sed id ultricies nunc. 
                Phasellus sed sapien ac erat condimentum eleifend. Vivamus aliquet magna erat, vel consequat augue aliquet 
                vitae. Ut pellentesque tincidunt venenatis. Proin pellentesque metus euismod odio vestibulum, quis 
                ultrices magna vulputate. Aliquam tincidunt eros sit amet facilisis euismod. Suspendisse vulputate lobortis 
                laoreet. Nulla scelerisque metus sed magna convallis laoreet. Cras ut massa sit amet lacus pulvinar tristique.
                </p>
            </div>
            <div class="info-final">
                <p>Fecha aproximada de entrega: dd/mm/aaaa</p>
                <p>Total: $$$</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <h2>IgniteCrowd</h2>
        <a href="PreguntasFrecuentes.html" class="botones-footer">Preguntas frecuentes</a>
        <a href="AyudaAutores.html" class="botones-footer">Ayuda para autores</a>
        <div class="boton-cookies">
            <a href="#" class="botones-footer">Cookies</a>
        </div>
    </footer>
</body>
</html>