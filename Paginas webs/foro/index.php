
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
        <div class="login">
            <form name="form1" id="form1" method="POST" action="login.php" enctype="multipart/form-data" onSubmit="return validaringreso();">
                <div class="form-group">
                <label for="">Usuario   </label>
                <input type="text"class="form-control form-control-sm" name="usuario" id="usuario">
                </div> <br>
                <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" class="form-control form-control-sm" name="clave" id="clave">
                </div><br>
                <div class="form-boton">
                <input type="submit" value="Ingresar">
                </div>
            </form>
            <p>Si no posee una cuenta,<a href="registrarusuario.php">puede registrarse aca</a></p>
        </div>
    </body>
</html>