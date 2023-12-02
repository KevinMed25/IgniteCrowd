<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalógo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="header">
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
        <div class="panel"> 
            <div class="sobre-nosotros">
                <h1>Ayuda a cumplir sueños!</h1>
            </div>
        </div>
        <div class="filtro-barra">
            <div class="selector">
                <p>Ordenar por:</p>
                <select name="categoria" id="categoria">
                    <option class="opcion" value="">Todas las categorías</option>
                    <option class="opcion"  value="categoria1">Categoría 1</option>
                    <option class="opcion"  value="categoria2">Categoría 2</option>
                    <option class="opcion"  value="categoria3">Categoría 3</option>
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
    </header>
    <main class="catalogo">
        <div class="contenedor-catalogo">
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/InfernoSmall.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Infierno</h2>
                    <p><span class="backers">200 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/AlumMusica.jpeg">
                </div>
                <div class="info-proyecto">
                    <h2>Electro Albúm</h2>
                    <p><span class="backers">356 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/portadaManga.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Tokyo Ghoul</h2>
                    <p><span class="backers"> </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/InfernoSmall.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Infierno</h2>
                    <p><span class="backers">200 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/AlumMusica.jpeg">
                </div>
                <div class="info-proyecto">
                    <h2>Electro Albúm</h2>
                    <p><span class="backers">356 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/portadaManga.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Tokyo Ghoul</h2>
                    <p><span class="backers"> </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/InfernoSmall.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Infierno</h2>
                    <p><span class="backers">200 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/AlumMusica.jpeg">
                </div>
                <div class="info-proyecto">
                    <h2>Electro Albúm</h2>
                    <p><span class="backers">356 </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
            <article class="card">
                <div class="imagen">
                    <img src="./img/proyectos/portadaManga.jpg">
                </div>
                <div class="info-proyecto">
                    <h2>Tokyo Ghoul</h2>
                    <p><span class="backers"> </span><br>Backers</p>
                    <p><span class="cifra">300$</span><br>De $700</p>
                </div>
            </article>
        </div>
        <a class="boton" href="./catalogo.html">Ver más Proyectos</a>
    </main>
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