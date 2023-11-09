<?php
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $celular = $_POST['celular'];

        $destinatario = 'gbarboza.es@gmail.com';


        $asunto = 'MATRICULA CLIENTE WEB';

        $cuerpo = "NOMBRE :" . $nombres . "\n";
        $cuerpo .= "APELLIDOS :" . $apellidos . "\n";
        $cuerpo .= "CORREO :" . $correo . "\n";
        $cuerpo .= "CELULAR :" . $celular . "\n";

        if(mail($destinatario, $asunto, $cuerpo)){
            echo 'El mensaje se envió satisfactoriamente';
        } else{
            echo '¡ERROR! El mensaje no se envió';
        }
    }
?>