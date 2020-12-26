<?php
    try {

        //conexion a la base de datos
        $pdo = new PDO("mysql:host=localhost;dbname=baseforo;charset=utf8", "root", "");
        //obtener datos del formulario y asignar
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        printf("%s %s\n", $usuario, $clave);
        //consulta
        $sql="SELECT * from usuario where usuario='$usuario' and clave='$clave'";
        $buscar = $pdo->query($sql);
        $dato = $buscar->fetch();
        if($dato["usuario"] != "")
        {
            printf("%s %s\n", $dato["usuario"], $dato["clave"]);
            session_start();
            $_SESSION['susuario']  = $usuario;
            $_SESSION['sclave'] = $clave;
            $_SESSION['snombre'] = $dato["nombre"];
            $_SESSION['stipo'] = $dato["tipo"];
            
            header("Location:foro.php"); 
        }else {
            printf("No se encontro el usuario.");
            header("Location:index.php"); 
        }
    } catch (Exception $e) {
        echo 'Error de formulario: ',  $e->getMessage(), "\n";
    }
?>

