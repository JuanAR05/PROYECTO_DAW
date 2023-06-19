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
    <div class="main">
    <label for="chk" aria-hidden="true">RELLENE EL FORMULARIO PARA INTRODUCIR MAS PISTAS</label>  

    <form method="POST"> 
        <input type="text" name="Nombre" placeholder="Nombre del centro">
        <select name="Categoria">
            <option value="Futsal">Futsal</option>
            <option value="Cesped">Cesped</option>
            <option value="Alvero">Alvero</option>
        </select>
        <select name="id_localidad">
            <option value='1'>Aguadulce</option>
            <option value='2'>Alanís</option>
            <option value='3'>Albaida del Aljarafe</option>
            <option value='4'>Alcalá de Guadaíra</option>
            <option value='5'>Alcalá del Río</option>
            <option value='6'>Alcolea del Río</option>
            <option value='7'>La Algaba</option>
            <option value='8'>Algámitas</option>
            <option value='9'>Almadén de la Plata</option>
            <option value='10'>Almensilla</option>
            <option value='11'>Arahal</option>
            <option value='12'>Aznalcázar</option>
            <option value='13'>Aznalcóllar</option>
            <option value='14'>Badolatosa</option>
            <option value='15'>Benacazón</option>
            <option value='16'>Bollullos de la Mitación</option>
            <option value='17'>Bormujos</option>
            <option value='18'>Brenes</option>
            <option value='19'>Burguillos</option>
            <option value='20'>Las Cabezas de San Juan</option>
            <option value='21'>Camas</option>
            <option value='22'>La Campana</option>
            <option value='23'>Cantillana</option>
            <option value='24'>Cañada Rosal</option>
            <option value='25'>Carmona</option>
            <option value='26'>Carrión de los Céspedes</option>
            <option value='27'>Casariche</option>
            <option value='28'>Castilblanco de los Arroyos</option>
            <option value='29'>Castilleja de Guzmán</option>
            <option value='30'>Castilleja de la Cuesta</option>
            <option value='31'>Castilleja del Campo</option>
            <option value='32'>El Castillo de las Guardas</option>
            <option value='33'>Cazalla de la Sierra</option>
            <option value='34'>Constantina</option>
            <option value='35'>Coria del Río</option>
            <option value='36'>Coripe</option>
            <option value='37'>El Coronil</option>
            <option value='38'>Los Corrales</option>
            <option value='39'>El Cuervo de Sevilla</option>
            <option value='40'>Dos Hermanas</option>
            <option value='41'>Écija</option>
            <option value='42'>Espartinas</option>
            <option value='43'>Estepa</option>
            <option value='44'>Fuentes de Andalucía</option>
            <option value='45'>El Garrobo</option>
            <option value='46'>Gelves</option>
            <option value='47'>Gerena</option>
            <option value='48'>Gilena</option>
            <option value='49'>Gines</option>
            <option value='50'>Guadalcanal</option>
            <option value='51'>Guillena</option>
            <option value='52'>Herrera</option>
            <option value='53'>Huévar del Aljarafe</option>
            <option value='54'>Isla Mayor</option>
            <option value='55'>Lantejuela</option>
            <option value='56'>Lebrija</option>
            <option value='57'>Lora de Estepa</option>
            <option value='58'>Lora del Río</option>
            <option value='59'>La Luisiana</option>
            <option value='60'>El Madroño</option>
            <option value='61'>Mairena del Alcor</option>
            <option value='62'>Mairena del Aljarafe</option>
            <option value='63'>Marchena</option>
            <option value='64'>Marinaleda</option>
            <option value='65'>Martín de la Jara</option>
            <option value='66'>Los Molares</option>
            <option value='67'>Montellano</option>
            <option value='68'>Morón de la Frontera</option>
            <option value='69'>Las Navas de la Concepción</option>
            <option value='70'>Olivares</option>
            <option value='71'>Osuna</option>
            <option value='72'>Los Palacios y Villafranca</option>
            <option value='73'>Palomares del Río</option>
            <option value='74'>Paradas</option>
            <option value='75'>Pedrera</option>
            <option value='76'>El Pedroso</option>
            <option value='77'>Peñaflor</option>
            <option value='78'>Pilas</option>
            <option value='79'>Pruna</option>
            <option value='80'>La Puebla de Cazalla</option>
            <option value='81'>La Puebla de los Infantes</option>
            <option value='82'>La Puebla del Río</option>
            <option value='83'>El Real de la Jara</option>
            <option value='84'>La Rinconada</option>
            <option value='85'>La Roda de Andalucía</option>
            <option value='86'>El Ronquillo</option>
            <option value='87'>El Rubio</option>
            <option value='88'>Salteras</option>
            <option value='89'>San Juan de Aznalfarache</option>
            <option value='90'>San Nicolás del Puerto</option>
            <option value='91'>Sanlúcar la Mayor</option>
            <option value='92'>Santiponce</option>
            <option value='93'>El Saucejo</option>
            <option value='94'>Sevilla</option>
            <option value='95'>Tocina-Los Rosales</option>
            <option value='96'>Tomares</option>
            <option value='97'>Umbrete</option>
            <option value='98'>Utrera</option>
            <option value='99'>Valencina de la Concepción</option>
            <option value='100'>Villamanrique de la Condesa</option>
            <option value='101'>Villanueva de San Juan</option>
            <option value='102'>Villanueva del Ariscal</option>
            <option value='103'>Villanueva del Río y Minas</option>
            <option value='104'>Villaverde del Río</option>
            <option value='105'>El Viso del Alcor</option>
        </select>
        <button type="Submit" value="Enviar">Enviar</button>
    </form>
<button><a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin.php">Volver</a></button></div>
    <?php
    include("bdPlayfut.php");
    if (!empty($_POST['Nombre'])&&!empty($_POST['Categoria'])&&!empty($_POST['id_localidad'])) {
        $Nombre=$_POST['Nombre'];
        $Categoria=$_POST['Categoria'];
        $Localidad=$_POST['id_localidad'];
    
        $orden ="INSERT INTO PISTA (NOMBRE,CATEGORIA,ID_LOCALIDAD) VALUES ('".$Nombre."','".$Categoria."',".$Localidad.");";

        if ($conexion->query($orden)) {
        }
     }
?>
<br>
</body>
</body>
</html>