<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" type="text/css" href="estilosAyuda.css">
</head>
<body>
    <body>
        <div class="formularioAyuda">
            <h1>¿Necesitas ayuda?</h1>
            <form method="post">

                <div class="nombreUsuario">
                    <input type="text" required>
                    <label for="nombreUsuario">Nombre</label>
                </div>

                <div class="asunto">
                    <input type="text" required>
                    <label for="asunto">Asunto</label>
                </div>
        
                <div class="correoUsuario">
                    <input type="text" required>
                    <label for="correoUsuario">Correo</label>
                </div>
                
                <label for="descripcion" class="desc">¿En qué podemos ayudarte?</label>
                <div class="descripcion">
                    <textarea type="text" required id="descripcion" name="descripcion"></textarea>
                </div>
                
                <input type="submit" value="Enviar mensaje">
                <div  class="cerrar">
                     <a href="#">Cerrar</a>
                </div>
            </form>
        </div>
</body>
</html>