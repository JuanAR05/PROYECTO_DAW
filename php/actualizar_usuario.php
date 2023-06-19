<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PlayFut</title>
  <link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />
<link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

    <form method="POST">
        <input type="text" name="Nombre_Usuario" placeholder="Introduzca el usuario para actualizar : ">
        <input type="submit" name="submit" value="Actualizar">

    </form>

    <form method="POST" action="send.php">
        <input type="submit" value="Enviar ">
    </form>


    <?php

    include("bdPlayfut.php");

    session_start();
    $user = $_SESSION['usuario'];
    echo "<h1> Usuario : " . $user . "</h1>";




    if (!empty($_POST['Nombre_Usuario'])) {

        $usuario = $_POST['Nombre_Usuario'];
        $update = "UPDATE USUARIO SET NOMBRE_USUARIO = '$usuario' WHERE NOMBRE_USUARIO = '$user';";
        $_SESSION['usuario'] = $usuario;

        if ($conexion->query($update)) {
            echo "Usuario actualizado correctamente <br>";
        } else {
            echo "Error al actualizar el usuario <br>";
        }
    }
    $user = $_SESSION['usuario'];
    $select = "SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = '$user';";
    if ($valor = $conexion->query($select)) {

        while ($columna = $valor->fetch_assoc()) {
            echo "<br>";
            print_r("Usuario : " . $columna['NOMBRE_USUARIO'] . "<br>");
            print_r("Nombre : " . $columna['NOMBRE'] . "<br>");
            print_r("Apellidos : " . $columna['APELLIDOS'] . "<br>");
            print_r("Correo : " . $columna['CORREO'] . "<br>");
            print_r("DNI : " . $columna['DNI'] . "<br>");
            print_r("Contraseña : " . $columna['CONTRASENA'] . "<br>");
            print_r("TLF : " . $columna['TELEFONO'] . "<br>");
            $_SESSION['correo'] = $columna['CORREO'];
        }
    }


    ?>

    <form action="" method="post">
        <input type="submit" name="editarPass" value="EDITAR PASSWORD"></input>
    </form>
    <?php
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
    if (!empty($_POST['editarPass'])) {
        $resPassword  = generate_string();

        echo "Contraseña sin hashear: " . $resPassword;
        $_SESSION['PASS'] = $resPassword;
        echo "<br>";
        echo "<br>";
        $resPasswordHash = password_hash($_SESSION['PASS'], PASSWORD_DEFAULT);
        echo $resPasswordHash;
        $password = "UPDATE USUARIO SET CONTRASENA = '$resPasswordHash' WHERE NOMBRE_USUARIO ='$user';";
        if ($conexion->query($password)) {
            echo "<br>Contraseña actualizada correctamente <br>";
        } else {
            echo "Error al actualizar contraseña <br>";
        }
    }
    ?>

</body>

</html>