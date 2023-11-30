<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda para autores</title>
    <link href="estilosAutores.css" rel="stylesheet" type="text/css">
</head>
<body>
    <ul class="navBar">
        <li><a href="#">Explorar</a></li>
        <li><a href="#">Empieza tu proyecto</a></li>
        <li class="logo-container"><img src="imgs\logo.png" class="logo"></li>
        <li class="boton-derecho"><a href="#">Registrarse</a></li>
        <li class="boton-derecho"><a href="#">Iniciar sesión</a></li>
    </ul>

    <nav class="lateral">
        <div class="cajabuscar"><form method="get" id="buscarform">
            <fieldset>
                <input type="text" id="s" value="" placeholder="Buscar" />
                <input class="button" type="submit" value=""/>
                <i class="search"></i>
            </fieldset>
            </form>
        </div>

        <div id="sideNavigation" class="sidenav">
            <h2>Categorías</h2>
            <a href="#">Enviar respuesta</a>
            <a href="#">Empezar campaña</a>
            <a href="#">¿Cómo funciona?</a>
            <a href="#">Procedimiento</a>
        </div>
    </nav>

    <div class="cuerpo">
        <p class="titulo-cuerpo">¡Esto te puede ayudar!</p>
        <p class="grid-item">¿Cómo puedo iniciar mi proyecto?</p>

        <div class="grid-container">
            <div class="grid-item">Envíanos tu propuesta</div>
            <div class="grid-item">Accede a la edición</div>
           
            <div>
                <img src="imgs\paso-1.png" class="grid-img">
            </div>  

            <div class="texto-forma">
                Prepara tu propuesta llenando la plantilla proporcionada por nuestro equipo.
            </div>
            
            <div>
                <img src="imgs\paso-2.png" class="grid-img">
            </div>  

            <div class="texto-forma">
                Si tu proyecto es una categoría de IgniteCrowd, podrás tener acceso a la página de edición.
            </div>
            
            <div class="grid-item"></div>  
            <div class="grid-item"></div>
            
            <div class="grid-item">Prepara tu campaña</div>
            <div class="grid-item">¡Publica tu obra!</div>  
            
            <div>
                <img src="imgs\paso-3.png" class="grid-img">
            </div>
            <div class="texto-forma">
                ¡No te preocupes por el tiempo! Tienes todo el tiempo que requieras para editar la sección de tu proyecto.
            </div> 
            
            <div>
                <img src="imgs\paso-4.png" class="grid-img">
            </div>
            <div class="texto-forma">
                Cuando hayas terminado podrás publicarla y comenzar la aventura de un nuevo proyecto.
            </div>
        </div>
        <div><button href="#" class="boton">Contáctanos</button></div>
    </div>
</body>

<footer class="footer">

      <p>Conócenos</p>
      <a href="#">
        <button class="boton-footer">Preguntas frecuentes</button>
      </a>

      <a href="#">
        <button class="boton-footer boton-cookies">Cookies</button> 
      </a> 

</footer>
</html>