<?php
	//Inicio de sesiones:
	session_start();
	error_reporting(0);
    $usuario= $_SESSION['usuario'];
    $nom = $_SESSION['nombre'];
    $cont = $_SESSION['con'];
    
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<title>Home</title>
		<script type="text/javascript">
			var cn="<?php echo $cont; ?>";
  		    if (cn==true){
  		    	alert("El usuario o contraseña estan mal ingresados");
  		    }
		</script>
	</head>
	<body>
		<!--Iniciar Sesion-->
		<div id="box">
			<h1>Login</h1><br>
			<form id="logear" method="POST" action="login.php">
				Usuario: <br>
				<input type="text" name="usuario"/> <br>
				Contraseña:<br>
				<input type="password" name="clave"/><br>
				<input id="boton" type="submit" value="Entrar" name="inicio"/>
			</form>
		</div>
	</body>
</html>