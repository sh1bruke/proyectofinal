<?php
    $hostname = "localhost";
    $dbusername = "admin";
    $dbpassword = "admin";
    $db = "refugiolaika";

    $conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $db);

    if (!$conexion) {
      die("Database connection failed: ");
    }
?>