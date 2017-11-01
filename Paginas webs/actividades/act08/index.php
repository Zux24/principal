<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<title>Ajax con JQuery</title>
		<link rel="stylesheet" type="text/css" href="styles/style_index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			$(document).ready(principal);

			function principal(){
				$("#boton1").click(ajax1); 
				$("#boton2").click(ajax2); 
				$("#boton3").click(ajax3); 
			}
			function ajax1(){
			        $.ajax({url: "info.txt", 
			        		 success: function(result){ $("#Contenido").html(result);
			        		}});
			}
			function ajax2(){
			        $.ajax({ url: "info2.txt", 
			        		 success: function(result){ $("#Contenido").html(result);
			        		}});
			}
			function ajax3(){
			        $.ajax({ url: "info3.txt", 
			        		 success: function(result){ $("#Contenido").html(result);
			        		}});
			}
		</script>
	</head>
	<body>
		
		<div class="productos">
			<table>
				<tr>
					<td>
						<div class="box">
							<img src="http://www.zmart.cl/Productos/SKU/2015/04/20/JUE1962_201542016141_b.jpg"><br>
							<h5>Juego Guild Wars 2: Heart of Thorns </h5>
							<p>Caracteristicas:</p>
							<button id="boton1">Click aca para ver caracteristicas</button>
						</div>
					</td>
					<td>
						<div class="box2">
							<img src="http://www.zmart.cl/Productos/SKU/2015/07/30/JUE1549_201573016439_b.jpg"><br>
							<h5>Juego StarCraft II: Legacy of the Void</h5>
							<p>Caracteristicas:</p>
							<button id="boton2">Click aca para ver caracteristicas</button>
						</div>
					</td>
					<td>
						<div class="box3">
							<img src="http://media.blizzard.com/wow/legion-6a153ad2/images/legion-box-art.png"><br>
							<h5>Juego World of Warcraft: Legion</h5>
							<p>Caracteristicas:</p>
							<button id="boton3">Click aca para ver caracteristicas</button>
						</div>
					</td>
				</tr>
			</table>
			<div id="Contenido"></div>
		</div>
	</body>
</html>
