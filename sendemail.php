<?php
// Guardar los datos recibidos en variables:
    foreach($_POST as $nombre_campo => $valor){
       $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
       eval($asignacion);
    }
// Definir el correo de destino:
    $dest = "jjcinformatik@gmail.com";

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
    $headers = "From: jjce<contacto@johnjce.github.io>\r\n";
    $headers .= "X-Mailer: PHP5\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Aqui definimos el asunto y armamos el cuerpo del mensaje
    $asunto = "!IMPORTANTE JOHN¡";
    $cuerpo = "Nombre: ".$nombre."<br>";
    $cuerpo .= "Email: ".$email."<br>";
    $cuerpo .= "Telefono: ".$telefono."<br>";
    $cuerpo .= "Mensaje: ".$mensaje;

// Aqui envia el correo:
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
