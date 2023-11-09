<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        //PASO #1: Enlazamos las variables con su respectivo Identificador
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $celular = $_POST['celular'];
        $mensaje = $_POST['mensaje'];

        //PAS #2: Escoger el destinatario
        $destinatario = 'heltonmalaver@gmail.com';

        //PASO #3: Establecer el asunto
        $asunto = 'CONTACTO CLIENTE WEB';

        //paso #4: Diseñamos el cuerpo del mensaje
        $cuerpo = "NOMBRE: " . $nombre . "\n";
        $cuerpo .= "CORREO: " . $correo . "\n";
        $cuerpo .= "CELULAR: " . $celular . "\n";
        $cuerpo .= "MENSAJE: " . $mensaje . "\n";

        //PASO #5:Enviar el mensaje al correo
        if(mail($destinatario, $asunto, $cuerpo)){
            echo 'El mensaje se envió satisfactoriamente';
        } else{
            echo '¡ERROR! El mensaje no se envio';
        }

    }



?>