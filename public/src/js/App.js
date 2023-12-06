
function validarUsuario() {
    
    var nombre = document.getElementById('nombreUsuario').value;
    var apellido_paterno = document.getElementById('primerApellido').value;
    var apellido_materno = document.getElementById('segundoApellido').value;
    var telefono = document.getElementById('telUsuario').value;
    var email = document.getElementById('correoUsuario').value;
    var password = document.getElementById('passwordUsuario').value;

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '/ValidarUsuario.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        //console.log('Respuesta del servidor:', xhr.responseText);
        if (xhr.status === 200) {
          
            var respuesta = JSON.parse(xhr.responseText);
            if (respuesta.existe) {
               
                alert('El usuario ya existe. Por favor, elija otro correo electrónico.');
            } else {
                alert('Usuario validado con éxito. Puedes continuar con el registro.');
                window.location.href = '/';
                return false;
            }
        } else {
           
            alert('Error en la solicitud al servidor. Inténtalo de nuevo.');
        }
    };

    xhr.onerror = function () {
        alert('Error de red. Verifica tu conexión e inténtalo de nuevo.');
    };

    var datos = 'usuario[nombre]=' + encodeURIComponent(nombre) +
                '&usuario[apellido_paterno]=' + encodeURIComponent(apellido_paterno) +
                '&usuario[apellido_materno]=' + encodeURIComponent(apellido_materno) +
                '&usuario[telefono]=' + encodeURIComponent(telefono) +
                '&usuario[email]=' + encodeURIComponent(email) +
                '&usuario[password]=' + encodeURIComponent(password);

    //console.log('Enviando solicitud con datos:', datos);
    xhr.send(datos);

    return false;
}

