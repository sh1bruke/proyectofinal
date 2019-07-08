<?php
    require("conexionBD.php");
  
    session_start();

    /** 
     *  Obtengo el valor del campo con name loginuser y loginpassword, que
     *  vienen guardadas en la variable global $_REQUEST, y las asigno
     *  a las variables $username y $password
     */
    $dni = $_REQUEST["loginuser"];
    $password = $_REQUEST["loginpassword"];
    
    $query = 'SELECT * FROM usuarios WHERE dni LIKE "' . $dni . '" LIMIT 1';
    
    $resultado = mysqli_query($conexion, $query);

    $userBD = mysqli_fetch_array($resultado);

    if (password_verify($password, $userBD['Password'])) {
        $_SESSION["username"] = $dni;
        $_SESSION["user-id"] = $userBD["UsuarioId"];
        
        header('Location: /Proyecto ComIT/index.html');
    } else {
     
        $_SESSION["message"] = "Usuario o contraseña incorrectos";
        header('Location: /Proyecto ComIT/index.html');
    }
?>