<!DOCTYPE html>
<html lang="en">
<head>
<title> PlayFut</title>
    <link rel="shortcut icon" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/images/logo2.png" mce_href="soccer-master/images/logo2.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/css/style2.css">
    <style>
    table {
	text-align: center;
    margin: 0 auto;
    
    background-color: white;
}
    </style>
    
</head>
<body>
    <div class="main">
    <label for="chk" aria-hidden="true">Datos de Usuario</label>
<?php    
session_start();
    include("bdPlayfut.php");
    $user = $_SESSION['usuario'];
    $select1 = "SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = '".$user."';";
    if ($valor = $conexion->query($select1)){

        echo '<table border="1">';
        echo '<tr>';
        echo '<th id="">Nombre Usuario</th>';
        echo '<th id="">Nombre Completo</th>';
        echo '<th id="">Telefono</th>';
        echo '<th id="">DNI</th>';
        echo '<th id="">Correo</th>';

        echo '</tr>';

        while($columna=$valor->fetch_assoc()){
        

    echo '<tr>';
    echo  '<td>' . $columna['NOMBRE_USUARIO'] . '</td>';
    echo  '<td>' . $columna['NOMBRE'] ." ".$columna['APELLIDOS'].'</td>';
    echo  '<td>' . $columna['TELEFONO'] . '</td>';
    echo  '<td>' . $columna['DNI'] . '</td>';
    echo  '<td>' . $columna['CORREO'] . '</td>';

    echo '</tr>';
    }
}

echo '</table>';
?>

<button type="submit"><a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">Volver</a></button>
</div>
</body>
</html>