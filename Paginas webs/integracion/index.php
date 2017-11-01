<!--Conexion a la Base de datos-->
<?php
	$con = mysql_connect("localhost","root","");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<title>Inicio</title>
		<link rel="icon" type="image/ico" href="img/logoarduino.png" />

	</head>
	<body>
		<!--ENCABEZADO-->
		<div id="encabezado">
			<div class="logo">
				<h2> Portable Fan System </h2>
				<h5>Rekt Inc.</h5>
			</div>
		</div>
		<!--NAVEGADOR DE LA PAGINA WEB-->
		<div id="navegador">
			<nav class="menu">
				<a class="marcador" href="index.php">Inicio</a>
				<a class="link" href="graficos.php">Graficos</a>
				<a class="link" href="nosotros.php">Nosotros</a>
				<a class="link" href="contactos.php">Contactos</a>
			</nav>
		</div>
		<!--CONTENIDO DE LA PAGINA WEB-->
		<div id="contenido">
			<h3><b>Objetivo General</b></h3>
			<p>
				Este proyecto esta enfocado en detectar la temperatura de un lugar especifico con 
				el sensor de temperatura LM35 conectado a la placa arduino, estos iran esamblados junto
				a un modulo de Bluetooth para transferir los datos optenidos durante el dia a una
				computadora.Se utilizara Python y Mysql para procesar los datos de temperatura
				durante el dia  a una base de datos conectada a la pagina web. Tambien se podra
				acceder a los graficos de temperaturas obtenidas por ciertas cantidad de tiempo 
				(principalmente el grafico de las temperaturas obtenidas durante el dia).
			</p>

			<p><b>Arduino: </b> es una placa de hardware libre, esta posee un micro-controlador y un entorno de desarrollo, diseñada para facilitar el uso de la electrónica en proyectos multidisciplinares. Este hardware funciona con su propio lenguaje  de programación.</p>
			<img id="ard" src="img/Arduino_uno_1.jpg">
			<p><b>LM35:</b> es un sensor de temperatura, que viene calibrado con una precisión de 1°C y es capaz de medir entre -55°C y 150°C.  
Este será uno de los componentes principales a usar en  este proyecto, ya que este detectara la temperatura del ambiente para luego mandar la información a la placa Arduino, y así activar o desactivar el ventilador cuando este estime conveniente.
</p>
			<img id="ard" src="img/lm35.jpg">
		</div>
		<!--PIE DE LA PAGINA-->
		<div id="footer">
			<center>
				Ingenieria Civil Informatica, UCT. 2015
			</center>
		</div>
	</body>
</html>