<?php
    //conexion a la base de datos
    $pdo = new PDO("mysql:host=localhost;dbname=baseforo;charset=utf8", "root", "");
    //consulta
    session_start();
    //Dejar en las variables las sesiones creadas.
    $user = $_SESSION['susuario'];
    $nom  = $_SESSION['snombre'];
    $t    = $_SESSION['stipo'];
    
    //Agregar mensaje a la base de datos:
    if( isset($_POST['btnPublicar']) ){

        $fecha = date("Y-m-d");
		$mensaje = $_POST['mensaje'];

		$sql = "INSERT INTO foro (id, usuario, fecha, mensaje) VALUES (NULL, '$user', '$fecha', '$mensaje')";

		$agregar = $pdo->query($sql);
    }
    
    //Eliminar mensaje
    if( isset($_GET['id']) ){
        $sql = "DELETE FROM foro WHERE id = ? ";
    
        $eliminar = $pdo->prepare($sql);
    
        $eliminar->execute(array($_GET['id']));
            
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
            <?php 
            if($t == "admin"){
                echo "<a href='mantenedorusuarios.php'>Mantenedor Usuarios</a>";
            } ?>
            <p><?php echo "Nombre: ".$_SESSION['snombre']."  "."Usuario: ".$_SESSION['susuario'];?></p>
            <a href="cerrarsesion.php">Cerrar Sesion</a>
        </div>
    </div>
    <div class="contenido">
        <h5>Publicaciones del foro</h5>
        <!--Tabla con mensajes del foro-->
        <table border="1">
            <?php  
                //Listar
                $sql = "SELECT id, usuario, fecha, mensaje FROM foro";
                $listar = $pdo->query($sql);
                foreach( $listar as $fila ){
            ?>
            <tr>
                <td> 
                    <?php echo $fila['usuario']; ?> <br>
                    <?php echo $fila['fecha']; ?> <br>
                    <?php 
                        if($t == "admin"){
                        echo "<a href='foro.php?id=".$fila['id']."'>Eliminar</a>";
                        } ?>
                    
                </td>
                <td class="celda"> <?php echo $fila['mensaje']; ?> </td>
            </tr>
            <?php }  ?>
        </table> <br>
        <!--Publicar un mensaje en el foro-->
        <form name="form1" id="form1" method="post" action="foro.php" enctype="multipart/form-data" onSubmit="return validarpublicacion();">
            <h5>Escriba algo para publicar en el foro</h5>
            <div class="form-group">
            <textarea name="mensaje" placeholder="" id="mensaje" rows="10" cols="50"></textarea>
            </div>
            <div class="form-group">
            <input type="submit"  name="btnPublicar" value="Publicar">
            </div>
        </form>
    </div>


    </body>
</html>