<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/css/style2.css">
    <title> PlayFut</title>
    <link rel="shortcut icon" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/images/logo2.png" mce_href="soccer-master/images/logo2.png" type="image/x-icon" />
</head>
<body>
    
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include("bdPlayfut.php");
    session_start();
    $_SESSION['Correo']= $_POST['correo'];
    function generate_string($strength = 16)
    {


        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
    if (!empty($_POST['Enviar_pass'])) {
        $resPassword  = generate_string();
        $_SESSION['PASS'] = $resPassword;
       
        echo "<br>";
        echo "<br>";
        $resPasswordHash = password_hash($_SESSION['PASS'], PASSWORD_DEFAULT);
        $password = "UPDATE USUARIO SET CONTRASENA = '$resPasswordHash' WHERE CORREO ='" . $_SESSION['Correo'] . "';";
        if ($conexion->query($password)) {
            echo "<br>Su contraseña de PlayFut ha sido actualiza correctamente, revise su bandeja de entrada por favor. <br>";
        } else {
            echo "Error al actualizar contraseña <br>";
        }
    }
    
$mail = new PHPMailer();
$mail->IsSMTP();



$mail->From = "playfutrrhhcorp@gmail.com"; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587;
$mail->Username ="playfutrrhhcorp@gmail.com"; 
$mail->Password = "PlayfUtMedac00?"; 

// destinatario

$mail->AddAddress($_SESSION['Correo']);
$mail->Subject = "Su contraseña de PlyaFut ha sido reestablecida con exito ";
$mail->Body =  $_SESSION['PASS'];

if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Su contraseña ha sido reestablecida ");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("Error al enviar contraseña");
        </script>';
}



?>