<?php
  //Inicio de sesion:
  session_start();
  //Definicion de variables:
   $usuario = $_POST['usuario'];
   $clave   = $_POST['clave'];
   $tipo    = $_POST['ficha'];
   //Conexion:
   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db ("juegogato");   

   $sql= mysql_query("select * from usuarios where nombre='$usuario' and clave='$clave'", $conexion);
   $consulta = mysql_num_rows($sql); // para que es el rows?

   if ($consulta == 1) { //Si existe:
         While ($row=mysql_fetch_array($sql)){
                   $_SESSION['usuario'] = $row['nombre'];
                   $_SESSION['tipo'] = $tipo;
                   echo "logeo 1 listo";
         }
   }

   if ($consulta == 0) { // Sino, lo crea:
        $sql=mysql_query("insert into usuarios (nombre,clave) values ('$usuario','$clave')", $conexion);
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipo;
        echo "Usuario nuevo registrado";
   mysql_close($conexion);

   }
?>

<html>

  <head>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/ico" href="imagenes/Mushroom - Mini.ico" />

    <title> Gato cuenta </title>
    <!-- Codigo javascript -->
        <script language="javascript">
             function Validar(){ //Verifica si los datos siguientes existen:
                 if(document.getElementById("usuario").value == "") { //Usuario
                     alert("Debes escribir tu nombre de usuario.");
                     document.getElementById("usuario").focus();
                     return false;
                      }
                 if(document.getElementById("clave").value == "") {  //Clave
                      alert("Debes escribir una tu clave de acceso.");
                      document.getElementById("clave").focus();
                      return false;
                       }
                 if(document.getElementById("ficha").value == "") { //Ficha (circulo o cruz)
                      alert("Debes elegir una ficha para jugar.");
                      document.getElementById("ficha").focus();
                       return false;
                        } 
                  return true;
                  }
           </script>

  </head>

  <body>
    <!-- Imagen de fondo: -->
    <img class="fondo" src="imagenes/fondo7.jpg">

    <center>
    <h1> Juego el gato</h1> <img class="cat" src="imagenes/cat_box.png">
    <h4 >Ingresar datos de segundo usuario.</h4>
    </center>

    <!-- Formulario para segunda sesion: -->
    <div>
    <form id="formulario" name="formulario" method="POST" action="login2.php" onsubmit="return Validar()">
      Nombre usuario 2: <br>
        <input id="usuario" type="text" name="usuario"/><br>
      Contrase&ntilde;a:<br>
        <input id="clave" type="password" name="clave"/><br>
      Elegir opcion para jugar: <br>  
        &nbsp<input id="ficha" type="radio" name="ficha" value="x"> X &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="ficha" type="radio" name="ficha" value="o">O <br>
      <input class="boton" type="submit" name="envio" value="Entrar"/>
    </form> 
    </div>

  </body>

</html>
