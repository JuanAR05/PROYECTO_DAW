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
    <div class="main" >
    <label for="chk" aria-hidden="true">Alistate a uno de los partido (Fase Beta)</label>
    
    <?php
        session_start();
        include("bdPlayfut.php");
       
        function filtro($conexion){
            if (!empty($_POST['Usuario'])) {
                $_SESSION['usuario']=$_POST['Usuario'];
                $select_User ="SELECT NOMBRE_USUARIO FROM PARTIDO WHERE NOMBRE_USUARIO = '" . $_SESSION['usuario'] . "';";
                if ($valor4 = $conexion->query($select_User)){
                    while($columna4=$valor4->fetch_assoc()){
                        if ($columna4['NOMBRE_USUARIO']==$_SESSION['usuario']) {
                            echo"Hola";
                        }else{ 
                            echo"Introduzca datos validos";
                        }
                    }
                }
            }
        }
        $orden = "SELECT * FROM PARTIDO; ";
        if ($valor1 = $conexion->query($orden)){
            while($columna1=$valor1->fetch_assoc()){
            $select2 = "SELECT * FROM PISTA WHERE ID_PISTA = ".$columna1['ID_PISTA'].";";
                if ($valor2 = $conexion->query($select2)){
                    echo"<div style='text-align: center;'>";
                    print_r("Creador del partido : ".$columna1['NOMBRE_USUARIO']."<br>");
                    while($columna2=$valor2->fetch_assoc()){
                        print_r("Estadio : ".$columna2['NOMBRE']."<br>");  
                        $select3 = "SELECT * FROM RESERVA WHERE ID_RESERVA= ".$columna1['ID_RESERVA'].";";
                        if ($valor3 = $conexion->query($select3)){
                            while($columna3=$valor3->fetch_assoc()){
                               
                                print_r("Fecha : ".$columna3['FECHA']."<br>");
                                print_r("Hora : ".$columna3['HORA']."<br>");
                                echo "<p id='div'> </p>";
                                echo"<button onclick='Alistarse()'>Alistarse</button>";
                                echo"</div>";
                                echo"<br>";
                                echo"</div>";
                            }
                        }
                    }
                }            
            }
        }
       
?>
 

</div>
    <script>
        function Alistarse(){   
            const value = document.cookie;
            const parts = value.split(";");
            const users= parts[0].split("=");
            console.log(users[1]);
            document.getElementById('div').innerHTML="Te ha alistado al partido "+ users[1];
        }
       
    </script>

</body>
</html>