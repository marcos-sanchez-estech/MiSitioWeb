<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $para = "marcos.rodr.sanch@gmail.com";

    $asunto = "Nuevo mensaje de portfolio";

    $cuerpo = "Has recibido un nuevo mensaje. \n\n";

    $cuerpo = "Nombre: $nombre\n";

    $cuerpo = "E-mail: $email\n";

    $cuerpo = "Mensaje: $mensaje\n";

    
    $headers = "From: $email\r\n";

    $headers .= "Reply-To: $email\r\n";


    if(mail($para, $asunto, $cuerpo, $headers)){
        echo "Mensaje enviado con éxito";
    }else{
        echo "Hubo un error al enviar el mensaje. Por favor, intentalo nuevamente.";
    }
}