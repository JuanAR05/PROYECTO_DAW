<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// include("actualizar_usuario.php");
session_start();

$mail = new PHPMailer();
$mail->IsSMTP();
 
echo $_SESSION['correo']; 
echo "<br>";
echo $_SESSION['PASS'];

$mail->From = "playfutrrhhcorp@gmail.com"; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587; 
$mail->Username ="playfutrrhhcorp@gmail.com"; 
$mail->Password = "PlayfUtMedac00?"; 

// destinatario

    $mail->AddAddress("jmg0017@alu.medac.es");
$mail->Subject = "Su contraseña de google ha sido reestablecida con exito ";
$mail->Body =  $_SESSION['PASS'];
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
?>
</body>
</html>