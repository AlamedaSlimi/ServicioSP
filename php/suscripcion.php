<?php
    $destino = "samuel.romo@uabc.edu.mx";
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $correo = $_POST["correo"];
    $grado = $_POST["grado"];
    $grupo = $_POST["grupo"];
    $cual = $_POST["cual"];
    $enterarse = $_POST["enterarse"];
    $utilizar = $_POST["utilizar"];
    $frecuencia = $_POST["frecuencia"];
    $expectativa = $_POST["expectativa"];

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, "Suscripcion a x curso", $contenido);
    header("Location:../index.html");
?>