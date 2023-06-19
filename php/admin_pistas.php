<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PlayFut</title>
    <link rel="stylesheet" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/css/style2.css">

    <div class="main">

    <label for="chk" aria-hidden="true">ADMINISTRADOR DE PISTAS</label>
    <style>
        table{
            margin-left: 25%;
            background-color: white;
        }
    </style>
    <?php

//LEE Y MUSTRA LOS DATOS DE LA BD
    
    include("bdPlayfut.php");
    $q_pista = "SELECT p.NOMBRE, p.CATEGORIA, l.NOMBRE_LOCALIDAD FROM pista p, localidad l where p.ID_LOCALIDAD = l.ID_LOCALIDAD;";
    if ($a_pista = $conexion->query($q_pista)) {

        echo '<table border="1">';
        echo '<tr>';
        echo '<th id="idproveedor">PISTA</th>';
        echo '<th id="empresa">CATEGORIA</th>';
        echo '<th id="comercial">LOCALIDAD</th>';

        echo '</tr>';
        while ($pista = $a_pista->fetch_assoc()) {
            echo '<tr>';
            echo  '<td>' . $pista['NOMBRE'] . '</td>';
            echo  '<td>' . $pista['CATEGORIA'] . '</td>';
            echo  '<td>' . $pista['NOMBRE_LOCALIDAD'] . '</td>';

            echo '</tr>';
        }
    }

    echo '</table>';

    ?>

    <?php
//ELIMINA REGISTROS DE LA BD
    if (!empty($_POST['nombre_pista'])) {
        $nombre_pista = $_POST['nombre_pista'];

        $orden = "DELETE FROM PISTA WHERE NOMBRE = '" . $nombre_pista . "';";
        if ($conexion->query($orden)) {
            echo "Pista eliminada satisfactoriamente";
        } else {
            echo "Error";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="nombre_pista">
        <button type="submit" value="Eliminar Pista">Eliminar</button>
    </form>
    <button><a type="button" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin.php">Volver</a></button>
</div>

</body>

</html>