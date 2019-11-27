<?php
$name  = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$enviados = 0;

$titulo    = 'Mensaje para Happy Team de '. $name ;
$mensaje   = 'correo ' . $email .':' .$text;
$cabeceras = 'From: info@happyteamabi.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
try{
mail('34_93@hotmail.com', $titulo, $mensaje, $cabeceras);
mail('paalsan@outlook.es', $titulo, $mensaje, $cabeceras);
mail('wendha86@gmail.com', $titulo, $mensaje, $cabeceras);
mail('danyhell7@hotmail.com', $titulo, $mensaje, $cabeceras);
mail('ireyesd1995@gmail.com', $titulo, $mensaje, $cabeceras);
mail('omargarzalimon@gmail.com', $titulo, $mensaje, $cabeceras);
mail('redgallegos02@gmail.com', $titulo, $mensaje, $cabeceras);
$enviados = 1;
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
if($enviados == 1){
header('Location: https://happyteamabi.com/home/contact.html');
}
?>