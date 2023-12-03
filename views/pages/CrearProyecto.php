<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <ul class="navegacion">
        <li><a href="./catalogo.html" class="enlace">Explorar</a></li>
        <li></li>
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
    <div class="contenedor-crear">
        <div class="titulo">
            <h1>Cuéntanos tu proyecto</h1>
        </div>
    
        <div class="tu-proyecto">
            <div class="subtitulos">
                <h1>Tu proyecto</h1>
                <h2>Datos</h2>
            </div>
            <div class="formulario-crear">
                <form>
                    <div class="text"><label for="proyecto">Nombre del proyecto</label></div>
                    <div class="caja"><input type="text" id="proyecto" placeholder="Escribe..."></div>
    
                    <div class="text"><label for="decrip">Descripción</label></div>
                    <div class="caja"><textarea placeholder="Escribe una descripción..."></textarea></div>
    
                    <div class="text"><label for="objetivo">Objetivo de financiación</label></div>
                    <div class="caja"><textarea placeholder="Cuéntanos tus objetivos..."></textarea></div>
    
                    <div class="text"><label for="calendario">Calendario de producción</label></div>
                    <div class="caja"><textarea placeholder="Cuéntanos tu planeación..."></textarea></div>
    
                    <div class="text"><label for="recompensas">Recompensas</label></div>
                    <div class="caja"><textarea placeholder="¿Qué recompensas tendremos?.."></textarea></div>
                    <div class="botones-confirmar">
                            <a href="#"><input class="boton-crear" type="submit" value="Cancelar"></a>
                            <a href="#"><input class="boton-crear" type="submit" value="Confirmar"></a>
                    </div>
                </form>
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