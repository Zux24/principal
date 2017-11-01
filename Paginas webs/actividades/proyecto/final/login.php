<?php
	session_start();
	error_reporting(0);
	//Variables post:
	$usuario = $_POST['user'];
    $pass = $_POST['clave'];

    //Conexion:()
    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db ("proyecto");  

    //Buscar Usuario:
    $sql=mysql_query("SELECT * FROM usuarios Where Usuario='$usuario' and Clave=md5('$pass')", $conexion);
    $consulta = mysql_num_rows($sql); 

   if ($consulta == 1) { //Si existe crear sesion:
         While ($row=mysql_fetch_array($sql)){
                   $_SESSION['user'] = $row['Usuario'];
         }
    }

    //TIPO USUARIO
    $resultado = mysql_query("SELECT tipo from tipo_usuario WHERE usuario='$usuario'",$conexion);
    while($fila=mysql_fetch_array($resultado)){
    $res = $fila['tipo'];}

    if ($res=="Administrador") {
        $_SESSION['admi'] = $res;
    }
    mysql_close($conexion);
    header("Location:index.php");
?>