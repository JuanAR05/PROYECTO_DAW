<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PlayFut</title>
    <link rel="shortcut icon" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/images/logo2.png" mce_href="soccer-master/images/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/css/style2.css">

</head>
<body>
    <div class="main1">
    <label for="chk" aria-hidden="true">EDITAR USUARIO</label>

    
<?php
include("bdPlayfut.php");
session_start();


if (!empty($_POST['users2'])) {
    $_SESSION['usuario'] = $_POST['users2'];

   
    $exists2 = "SELECT COUNT(*) FROM USUARIO WHERE NOMBRE_USUARIO = ' ".$_SESSION['usuario']."';";
    if ($exists2==1) {
       echo"Ese usuario no existe <br>";
} else {
    
    header('Location:http://localhost/PROYECTO_PLAYFUT/soccer-master/php/actualizar_usuario.php');
}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------
if (!empty($_POST['users'])) {
    $usuario=$_POST['users'];

    $exists = "SELECT COUNT(*) FROM USUARIO WHERE NOMBRE_USUARIO = ' ".$usuario."';";
    $valor5=$conexion->query($exists);
    $res=$valor5->fetch_assoc();
    if ($res['COUNT(*)']==0 || $res['COUNT(*)']==1) {
        if (!isset($usuario)) {
           echo"Ese usuario no existe <br>";

} else { 
    try {

    $Borrar ="DELETE  FROM USUARIO WHERE NOMBRE_USUARIO = '" . $usuario . "' ;";
    if ($conexion->query($Borrar)) {
        echo"Usuario borrado correctamente <br>";
    } else {
        echo "Error al borrar el usuario <br>";
    }
} catch (Exception $e) {
    echo "<script>alert('El usuario se esta usando en otra tabla');</script>";
}
        }
    

  } else {
      echo"Rellene el campo <br> ";
  }
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------

$select = "SELECT u.NOMBRE_USUARIO,u.NOMBRE,u.APELLIDOS,u.CORREO,u.DNI,u.TELEFONO,l.NOMBRE_LOCALIDAD FROM usuario u, localidad l WHERE u.ID_LOCALIDAD = l.ID_LOCALIDAD;";

if ($valor = $conexion->query($select)){

    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="idproveedor">Nombre Usuario</th>';
    echo '<th id="empresa">Nombre</th>';
    echo '<th id="comercial">Apellidos</th>';
    echo '<th id="comercial">Correo</th>';
    echo '<th id="comercial">DNI</th>';
    echo '<th id="comercial">Telefono</th>';
    echo '<th id="comercial">LOCALIDAD</th>';

    echo '</tr>';

    while($columna=$valor->fetch_assoc()){
    
        echo '<tr>';
        echo  '<td>' . $columna['NOMBRE_USUARIO'] . '</td>';
        echo  '<td>' . $columna['NOMBRE'] . '</td>';
        echo  '<td>' . $columna['APELLIDOS'] . '</td>';
        echo  '<td>' . $columna['CORREO'] . '</td>';
        echo  '<td>' . $columna['DNI'] . '</td>';
        echo  '<td>' . $columna['TELEFONO'] . '</td>';
        echo  '<td>' . $columna['NOMBRE_LOCALIDAD'] . '</td>';

        echo '</tr>';
    }
}

echo '</table>';


?>

<form method="POST">
        <input type="text" name="users" placeholder="Introduzca el usuario a eliminar : ">
        <button type="submit" value="eliminar">Eliminar</button>
</form>

<form method="POST">
        <input type="text" name="users2" placeholder="Introduzca el usuario para actualizar : ">
        <button type="submit" value="Actualizar">Actualizar</button>
</form>
<button><a type="button" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin.php">Volver</a></button>

</div>
</body>
</html>