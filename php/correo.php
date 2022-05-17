<?php

if (isset($_POST['enviar'])){
    $header = "from: baliseguros1@gmail.com" . "\r\n";
    $header.= "reply-to bautistasaggese2002@gmail.com"
    $header.= "x-mailer: PHP/". phpversion();
    $mail = mail($email,$asunto,$msg,$header);
    if (email) {
        echo "<h4> ¡Mail enviado exitosamente!</h4>";
    }
}