<?php
echo "aki";
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "jjcinformatik@gmail.com";

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto desde jjce";
$cuerpo = "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

// Aqui envia el correo:
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}

?>
