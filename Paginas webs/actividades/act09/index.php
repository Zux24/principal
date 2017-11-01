
<html>
	<head>
		<title>JSON + AJAX + jQUERY + BD Página</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<script src="http://cdn.jquerytools.org/1.2.4/full/jquery.tools.min.js"></script>
		<script type="text/javascript">
			$(document).ready(Principal);

				function Principal() {
					$("#boton").click(verusuarios);	
				}

				function verusuarios(){
					$ajax.({
						url: "datos.php",
						success: function(datos){
							var arr = JSON.parse(datos);
							var salida = "<table border='1'>";
							var i;
							for (i=0; i<arr.length; i++){
								salida += "<tr><td>" + arr[i].Nombre
								salida += "<tr><td>";
								salida += arr[i].Ciudad;
								salida += "</td></tr>";
							}
							salida += "</table>";

							document.getElementById("#info").innerHTML = salida
						}
					});
				}
		</script>
	</head>
	<body>
		<!--
			* click, mouseover, doble click....
			llamada al php, sacara informacion de una tabla
			todo lo realizado en ajax debe ser con jquery
			la respuesta es procesada en json.
		-->
		<p id="test"> </p>
		<script type="text/javascript">
			var text = '{"Nombre":"Alonso Jerez","Ciudad":"Santiago","Telefono":"89214515"}'
			var obj = JSON.parse(text);

			document.getElementById('test').innerHTML =
			obj.Nombre + "<br>" +
			obj.Ciudad + "<br>" +
			obj.Telefono;
		</script>

		<button id="boton">Mostrar Usuarios</button>

		<div id="info"></div>
	</body>
</html>