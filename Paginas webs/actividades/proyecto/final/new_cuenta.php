<?php
    //ESTE ARCHIVO CREA UNA NUEVA CUENTA EN LA BASE DE DATOS 

	session_start();
	error_reporting(0);

   //Definicion de variables recibidas por post:
    $usuario = $_POST['nick'];
    $nom   = $_POST['nombre'];
    $ap   = $_POST['apellido'];
    $fechab   = $_POST['fc'];
    $pass   = $_POST['clave'];
    $mail    = $_POST['correo'];

	//Conexion:()
    $conexion = mysql_connect("localhost", "root", "");
    mysql_select_db ("proyecto");  

    //Crear usuario en la base de datos:
    $sql="INSERT INTO usuarios (Usuario,Nombre,Apellido,Fecha_Nacimiento,Clave,Correo)"
    .$sql="VALUES ('$usuario','$nom','$ap','$fechab',md5('$pass'),'$mail')";
    mysql_query($sql, $conexion);
    echo "Usuario nuevo registrado";
    $_SESSION['user'] = $usuario; //CREA SESION USER.
    mysql_close($conexion);

    header("Location:index.php");
?>