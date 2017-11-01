  <?php 
	$mail = $_POST['emailAddress'];
	$web = $_POST['website'];
	$nlin= $_POST['numLicenses'];

	$nom= $_POST['billingName'];
	$di= $_POST['billingAddress'];
	$cp= $_POST['billingPostcode'];
	$ps= $_POST['billingCountry'];
	$tel= $_POST['phone'];

	$cn= $_POST['cardNumber'];
	$cc= $_POST['cvvCode'];
	$fc= $_POST['expiryDate'];

  ?>

<! DOCTYPE html>
<html lang = "es">
	<head>

		<title>Datos</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<style>

		#orderForm {
		  width: 35em;
		  margin: 0 auto;
		  padding: 50px 60px;
		  overflow: auto;
		  color: #3e4a49;
		  background-color: #f5eedb;
		  background: -webkit-gradient( linear, left bottom, left top, color-stop(0,#f5eedb), color-stop(1, #faf8f1) );
		  background: -moz-linear-gradient( center bottom, #f5eedb 0%, #faf8f1 100% );  
		  border-radius: 10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;  
		  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
		  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
		  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
		}

		.wideBox {
		  clear: both;
		  text-align: center;
		  margin: 70px;
		  padding: 10px;
		  background: #ebedf2;
		  border: 1px solid #333;
		  line-height: 80%;
		}

		.wideBox h1 {
		  font-weight: bold;
		  margin: 20px;
		  color: #666;
		  font-size: 1.5em;
		}

		</style>
	</head>

  <body>

  <div class = "wideBox">
    <h1>Se ha completado el formulario</h1>
  </div>
  <div id="orderForm">
  	<?php 
	  	echo "<b>Correo:</b>$mail<br>";
		echo "<b>Sitio Web:</b> $web<br>";
		echo "<b>Numero de licencias:</b> $nlin<br>";

		echo "<b>Nombre:</b> $nom<br>";
		echo "<b>Direccion:</b> $di<br>";
		echo "<b>Codigo postal:</b> $cp<br>";
		echo "<b>Pais:</b> $ps<br>";
		echo "<b>Telefono: </b>$tel<br>";

		echo "<b>Numeo de tarjeta: </b>$cn<br>";
		echo "<b>Codigo CVV: </b>$cc<br>";
		echo "<b>Fecha de caducidad: </b>$fc<br>";
		?>
  </div>

  </body>
</html>