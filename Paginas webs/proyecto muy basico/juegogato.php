<?php session_start(); 
   $usuario = $_SESSION['usuario'];
   $tipo   = $_SESSION['tipo'];
   $usuario2 = $_SESSION['usuario2'];
   $tipo2   = $_SESSION['tipo2'];
    $_SESSION['c']=0;

?>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles/style2.css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="imagenes/cat.png" />
		<title> Gato</title>

		<script type="text/javascript">

		//Definir variables:
		//var usuario1= prompt('ingresar valor o o x :');
		//if (usuario1=="x") {b=false;};
		//if (usuario2=="o") {b=true;};
	
		//var array1= ["","","","","","","",""];	
		cont=0;
		var array1= new Array(); //lugares de jugador 1
		var array2= new Array(); //lugares de jugador 2
		//var 
		function aparecer(a){ //Hace aparecer el circulo o cruz segun el usuario
				cont=cont+1;
				if(cont%2==0){
						valor="<?php echo $tipo2; ?>";
					}
				else{
						valor="<?php echo $tipo; ?>";
					}
				if (valor=="o") { // circulo
					document.getElementById(a).innerHTML = "<img id='fi' src='imagenes/01.png'/>";
					array1.push(a);
					};

				if (valor=="x") { //cruz
 					document.getElementById(a).innerHTML = "<img id='fi' src='imagenes/cruz.png'/>";
 					array2.push(a);
 					if(cont%2==0){
						valor="<?php echo $tipo2; ?>";
					}
					else{
 					valor="<?php echo $tipo; ?>";
 					}
				};
			
				
		}

		</script>

	</head>

	<body>
		<img class="fondo" src="imagenes/fondo7.jpg">

		<center>
				<h2>Juego el Gato:</h2><img class="cat" src="imagenes/cat_box.png">
				<div>
					Jugador 1 <?php  echo $usuario ?>
					<?php  echo $tipo ?><br>
					Jugador 2 <?php  echo $usuario2 ?>
					<?php  echo $tipo2 ?><br>

				</div><br>

				<table id="tab" border="1px">
					<tr>
						<td id="1" onClick="aparecer('1')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="2" onClick="aparecer('2')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="3" onClick="aparecer('3')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
					</tr>
					<tr>
						<td id="4" onClick="aparecer('4')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="5" onClick="aparecer('5')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="6" onClick="aparecer('6')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
					</tr>
					<tr>
						<td id="7" onClick="aparecer('7')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="8" onClick="aparecer('8')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
						<td id="9" onClick="aparecer('9')"><img id='fi' src='imagenes/fondo azul.jpg'/></td>
					</tr>

				</table><br>
				<a href="juegogato.php"><button>Reiniciar partida del juego</button></a><br>
		</center>
	</body>
</html>