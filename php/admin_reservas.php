<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PlayFut</title>
    <link rel="shortcut icon" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/images/logo2.png" mce_href="soccer-master/images/logo2.png" type="image/x-icon" />
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
    <label for="chk" aria-hidden="true">ADMINITRADOR DE PISTAS</label>

<form method="POST">
        <input type="number" name="id_reserva" placeholder="Introduce el ID para eliminar">
       <button type="submit" value="Eliminar Reserva" >Eliminar Reserva </button>
       <button type="submit" onclick="javascript:redireccionar()" value="Actualizar" >Actualizar </button>

    </form>
    <button><a type="button" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin.php">Volver</a></button>

    <script>
        function redireccionar(){
            location.href = "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin_reservas.php";
        }
    </script>

    <?php
    include("bdPlayfut.php");
        $select1 = "SELECT r.ID_RESERVA,r.NOMBRE_USUARIO,r.FECHA,r.HORA,p.NOMBRE,p.CATEGORIA FROM reserva r, pista p WHERE r.ID_PISTA=p.id_pista";
            if ($valor = $conexion->query($select1)){
                echo '<br>';
                echo '<table border="1">';
                echo '<tr>';
                echo '<th id="idproveedor">Id Reserva</th>';
                echo '<th id="empresa">Nombre de Usuario</th>';
                echo '<th id="comercial">Hora</th>';
                echo '<th id="comercial">Fecha</th>';
                echo '<th id="comercial">Pista</th>';
                echo '<th id="comercial">Categoria</th>';
              
                echo '</tr>';
                while($columna=$valor->fetch_assoc()){

                    echo '<tr>';
                    echo  '<td>' . $columna['ID_RESERVA'] . '</td>';
                    echo  '<td>' . $columna['NOMBRE_USUARIO'] . '</td>';
                    echo  '<td>' . $columna['HORA'] . '</td>';
                    echo  '<td>' . $columna['FECHA'] . '</td>';
                    echo  '<td>' . $columna['NOMBRE'] . '</td>';
                    echo  '<td>' . $columna['CATEGORIA'] . '</td>';
        
                    echo '</tr>';
                }
            }    
            

    echo '</table>';

    ?>
   
        <?php
            if(!empty($_POST['id_reserva'])){
                $id_reserva = $_POST['id_reserva'];
           
            $orden = "DELETE FROM RESERVA WHERE ID_RESERVA = ".$id_reserva.";";
            if ($conexion->query($orden)) {
                echo"Reserva eliminada satisfactoriamente";
            } else {
                echo "Error";
            } 
        }
        ?>
      </div>  
</body>
</html>