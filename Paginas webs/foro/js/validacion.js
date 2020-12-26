function validaregistros() {
    var user = document.getElementById('user');
    var pass = document.getElementById('pass');
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var tipo = document.getElementById('tipo');
    var imagen = document.getElementById('imagen');
    var nacionalidad = document.getElementById('nacionalidad');

    if (user.value == '') {
        alert('Debe ingresar un usuario.');
        user.focus();
        return false;
    }
    if (pass.value == '') {
        alert('Debe ingresar una clave.');
        pass.focus();
        return false;
    }
    if (nombre.value == '') {
        alert('Debe ingresar un nombre.');
        nombre.focus();
        return false;
    }
    if (apellido.value == '') {
        alert('Debe ingresar un apellido.');
        apellido.focus();
        return false;
    }

    if (imagen.value == '') {
        alert('Debe ingresar una imagen.');
        imagen.focus();
        return false;
    }
    if (nacionalidad.value == '') {
        alert('Debe ingresar su nacionalidad.');
        nacionalidad.focus();
        return false;
    }
    return true;

}

function validaringreso() {

    var usuario = document.getElementById('usuario');
    var clave = document.getElementById('clave');

    if (usuario.value == '') {
        alert('Debe ingresar un usuario.');
        usuario.focus();
        return false;
    }
    if (clave.value == '') {
        alert('Debe ingresar una clave.');
        clave.focus();
        return false;
    }

}

function validarpublicacion() {

    var mensaje = document.getElementById('mensaje');

    if (mensaje.value == '') {
        alert('Debe escribir algo para publicar.');
        mensaje.focus();
        return false;
    }
}