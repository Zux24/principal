<?php
    //conexion a la base de datos
    $pdo = new PDO("mysql:host=localhost;dbname=baseforo;charset=utf8", "root", "");
    //consulta
    session_start();
    //Dejar en las variables las sesiones creadas.
    $user = $_SESSION['susuario'];
    $nom  = $_SESSION['snombre'];
    $t    = $_SESSION['stipo'];
    
    if(isset($_GET['usuario']) ){
        
        $valor = $_GET['estado'];
        $actUser = $_GET['usuario'];
        if($valor == "true") {
            $sql = "UPDATE usuario SET activo='false' WHERE usuario='$actUser'";

            $actualizar = $pdo->query($sql);
        
        }
        if($valor == "false") {
            $sql = "UPDATE usuario SET activo='true' WHERE usuario='$actUser'";
    
            $actualizar = $pdo->query($sql);
        
        }
            
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<link rel="stylesheet" href="styles/style.css">
    <script src="js/validacion.js"></script>
</head>
    <body>
    <div class="nav">
        <h2>FORO ABIERTO</h2>
        <div class="menu">
            <a href="foro.php">Regresar al Foro</a>
            <p><?php echo "Nombre: ".$_SESSION['snombre']."  "."Usuario: ".$_SESSION['susuario'];?></p>
            <a href="cerrarsesion.php">Cerrar Sesion</a>
        </div>
    </div>
    <div class="mn">
        <h3>Mantenedor de Usuarios</h3>
        <!--Tabla con mensajes del foro-->
        <table border="1">
            <tr>
                <th>Usuario</th>
                <th>Tipo de Usuario</th>
                <th>Estado activo o no</th>
                <th>Click para cambiar estado</th>
            </tr>
            <?php  
                //Listar
                $sql = "SELECT usuario, clave, nombre, apellido, tipo, imagen,
                nacionalidad, activo FROM usuario WHERE tipo='U'";
                $listar = $pdo->query($sql);
                foreach( $listar as $fila ){
                    echo "<tr>";
                        echo "<td>".$fila['usuario']."</td>";
                        echo "<td>".$fila['tipo']."</td>";
                        echo "<td>".$fila['activo']."</td>";
                        echo "<td>";
                            echo "<a href='mantenedorusuarios.php?usuario=".$fila['usuario']."&estado=".$fila['activo']."'>Activar o Desactivar</a>";
                        echo "</td>";
                    echo "<tr>";
            }?>
        </table>
    </div>


    </body>
</html>