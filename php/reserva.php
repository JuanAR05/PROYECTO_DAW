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
<?php 
  include("bdPlayfut.php");
   $selectpista = "SELECT  NOMBRE,ID_PISTA FROM pista;";
   $valor = $conexion->query($selectpista);
   $Res= $valor->fetch_all();


?>
<div class="main">
<label for="chk" aria-hidden="true">RESERVA TU PISTA</label>


<div class="sidebar-box">
    <form method="POST">
        <select name="Dia" class="styled-select">
            <option selected>Elige el dia</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
        </select>
       
        <select name="Mes" class="styled-select">
            <option selected>Elige el mes</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
        </select>
        <select name="Hora" class="styled-select">
            <option selected>Elige la hora</option>
            <option value='09:00:00'>09:00</option>
            <option value='10:00:00'>10:00</option>
            <option value='11:00:00'>11:00</option>
      t      <option value='12:00:00'>12:00</option>
            <option value='13:00:00'>13:00</option>
            <option value='14:00:00'>14:00</option>
            <option value='16:00:00'>16:00</option>
            <option value='17:00:00'>17:00</option>
            <option value='18:00:00'>18:00</option>
            <option value='19:00:00'>19:00</opion>
            <option value='20:00:00'>20:00</option>
            <option value='21:00:00'>21:00</option>
            <option value='22:00:00'>22:00</option>
            <option value='23:00:00'>23:00</option>
    </select>
    <select name="Pista" class="styled-select" >
            <option selected>Elige la pista</option>
            <?php
              foreach($Res as $pistabase){
               echo"<option value='".$pistabase[1] ."'>".$pistabase[0] . "</option>" ;
              }
            ?>
    </select>

        <button type="submit"  value='Enviar'>Reservar</button>
    </form>
</div>
<?php

        
        if(!empty($_POST['Dia']) && !empty($_POST['Mes']) && !empty($_POST['Hora'])){
            $Dia = $_POST['Dia'];
            $Mes = $_POST['Mes'];
            $Hora = $_POST['Hora'];
            $pista = $_POST['Pista'];
       
            $select1 = "SELECT DISTINCT COUNT(*) FROM RESERVA WHERE FECHA = '2022 -".$Mes."-".$Dia."' AND HORA = '".$Hora."';";
            $valor = $conexion->query($select1);
            $Res= $valor->fetch_assoc();
            if($Res['COUNT(*)'] == 0){
                if(!isset($user)){
                $orden1 = "INSERT INTO RESERVA(HORA,FECHA,ID_PISTA,NOMBRE_USUARIO) VALUES ('".$Hora."','2022-".$Mes."-".$Dia."','".$pista."','".$_COOKIE['usuario']."');";
                if ($conexion->query($orden1)) {
                    echo "<div style='text-align: center;'>Reserva realizada satisfactoriamente </div>";
                }else {
                    echo "Error de conexion";
                }
            }else{
                header("Location: http://localhost/PROYECTO_PLAYFUT/soccer-master/php/register.php");
                
            }
        }else{
            echo "Error, ya hay una reserva a esa hora";
            }
        }
?>  
    <button><a type="button" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">Volver</a></button>
    </div>
</body>
</html>