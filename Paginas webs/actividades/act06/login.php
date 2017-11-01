<?php 
   //Inicio de sesion:
  session_start();
  error_reporting(0);
  //Definicion de variables:
   $usuario = $_POST['usuario'];
   $pass = md5($_POST['clave']);
   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db ("lm");  
   $sql= mysql_query("SELECT * FROM usuarios where usuario='$usuario' and clave='$pass'", $conexion);
   $consulta = mysql_num_rows($sql); 

   if ($consulta == 1) { //Si existe:
         While ($row=mysql_fetch_array($sql)){
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['usuario'] = $row['usuario'];
         }
         header("Location:menu.php");
    }
   else{
    $_SESSION['con'] = true;
    header("Location:index.php");
   }
   // Si usuario y contraseña on incorrectos debere redireccionar al home.	

?>