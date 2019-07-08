<?php
    require("conexionBD.php");
    
    session_start();
 
    $dni = $_REQUEST["dni"];
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $mail = $_REQUEST["mail"];
    $password = $_REQUEST["password"];
    $direccion = $_REQUEST["direccion"];
    $ciudad = $_REQUEST["ciudad"];
    $celular = $_REQUEST["celular"];
    $fechanac = $_REQUEST["fechanacimiento"];

    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    $query = "INSERT INTO usuarios(dni, nombre, apellido, mail, contraseña, direccion, ciudad, celular, fechanacimiento) 
    VALUES('" . $dni . "', '" . $nombre . "','" . $apellido . "', '" . $mail . "','" . $hash . "', '" . $direccion . "','" . $ciudad . "', '" . $celular . "','" . $fechanacimiento . "')"; 

        $resultado = mysqli_query($conexion, $query);


    if ($resultado) {
        $_SESSION["dni"] = $dni;
        $_SESSION["user-id"] = mysqli_insert_id($conexion);
        header('Location: /Proyecto ComIT/index.html');
    } else {
        $_SESSION["message"] = "Usuario ya existente";
        header('Location: /Proyecto ComIT/index.html');      
    }

?>