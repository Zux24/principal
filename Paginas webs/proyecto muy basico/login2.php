<?php session_start(); 
  //Logeo de segunda session:
   $usuario = $_SESSION['usuario'];
   $tipo   = $_SESSION['tipo'];
   $usuario2 = $_POST['usuario'];
   $clave2   = $_POST['clave'];
   $tipo2    = $_POST['ficha'];

   $conexion = mysql_connect("localhost", "root", "");
   mysql_select_db ("juegogato");   

   $sql= mysql_query("select * from usuarios where nombre='$usuario2' and clave='$clave2'", $conexion);
   $consulta = mysql_num_rows($sql); // para que es el rows?

   if ($consulta == 1) {
         While ($row=mysql_fetch_array($sql)){
                   $_SESSION['usuario2'] = $row['nombre'];
                   $_SESSION['tipo2'] = $tipo2;
                   echo "Funcko!!";
         }
   }

   if ($consulta == 0) {
        $sql=mysql_query("insert into usuarios (nombre,clave) values ('$usuario2','$clave2')", $conexion);
        $_SESSION['usuario2'] = $usuario2;
        $_SESSION['tipo2'] = $tipo2;
        echo "Regoistrado";
   mysql_close($conexion);

   }
   header("Location:juegogato.php");
?>