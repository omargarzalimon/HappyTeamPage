<?php
$name  = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$para  = 'oscar.villegas@ab-inbev.com' . ', '; 
$para  = 'paula.alba@ab-inbev.com' . ', '; 
$para  = 'wendy.herrera@ab-inbev.com' . ', '; 
$para  = 'omar.garza@ab-inbev.com' . ', '; 
$para  = 'daniel.hernandeza@ab-inbev.com' . ', '; 
$para  = 'irvin.reyesd@ab-inbev.com' . ', '; 
$para  = 'omargarzalimon@gmail.com' . ', '; 
$para .= 'jose.gallegosm@ab-inbev.com';
$titulo    = 'Mensaje para Happy Team de '. $name;
$mensaje   = $text;
$cabeceras = 'From: '. $email . "\r\n" .
    'Reply-To: happyteam@happyteamabi.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>