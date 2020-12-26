<?php  
    //conexion a la base de datos
    $pdo = new PDO("mysql:host=localhost;dbname=baseforo;charset=utf8", "root", "");

    //Agregar noticia
    if( isset($_POST['btnRegistrar']) ){

        $user = $_POST['user'];
		$pass = $_POST['pass'];
		$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $imagen = $_POST['imagen'];
        $nacionalidad = $_POST['nacionalidad'];

        $sql = "INSERT INTO usuario (usuario, clave, nombre, apellido, tipo, imagen, nacionalidad, activo) 
        VALUES ('$user', '$pass', '$nombre', '$apellido','U', '$imagen', '$nacionalidad','true')";

        $res= $pdo->query($sql);
        if ($res) {
            printf ("Se creo un nuevo registro.");
            header("Location:index.php"); 

        }else {
            printf ("No se creo un nuevo registro.");
        }
        
        
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<link rel="stylesheet" href="styles/style.css">
    <script src="js/validacion.js"></script>
</head>
    <body>
    <div class="nav">
            <h2>FORO ABIERTO</h2>
    </div>
    <div class="registrar">
        <h5>Formulario de registro</h5>
        <form name="form1" id="form1" method="post" action="registrarusuario.php" enctype="multipart/form-data" onSubmit="return validaregistros();">
            <div class="form">
            <label for="">Usuario</label>
            <input type="text"class="form-control form-control-sm" name="user" id="user">
            </div> <br>
            <div class="form">
            <label for="">Contraseña</label>
            <input type="password"class="form-control form-control-sm" name="pass" id="pass">
            </div><br>
            <div class="form">
            <label for="">Nombre</label>
            <input type="text"class="form-control form-control-sm" name="nombre" id="nombre">
            </div><br>
            <div class="form">
            <label for="">Apellido</label>
            <input type="text"class="form-control form-control-sm" name="apellido" id="apellido">
            </div><br>
            <div class="form">
            <label for="">Imagen</label>
            <input type="text"class="form-control form-control-sm" name="imagen" id="imagen">
            </div><br>
            <div class="form">
            <label for="">Nacionalidad</label>
            <input type="text"class="form-control form-control-sm" name="nacionalidad" id="nacionalidad">
            </div><br>
            <div class="form">
            <input type="submit"  name="btnRegistrar" value="Registrarse">
            </div>
        </form>
    </div>
    </body>
</html>