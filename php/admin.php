<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PlayFut</title>
    <link rel="shortcut icon" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/images/logo2.png" mce_href="soccer-master/images/logo2.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
    <audio autoplay loop>
        <source src="css/pelele2.mp3" type="audio/mpeg">
    </audio>
    <div class="main">
    <label for="chk" aria-hidden="true">PÁGINA DE ADMINISTRADOR</label>
    <button onclick="AnadirPista()">AÑADIR PISTA</button>
    <button onclick="AdminPistas()">ADMINISTRAR PISTAS</button>
    <button onclick="AdminReservas()">ADMINISTRAR RESERVAS</button>
    <button onclick="EditUser()">EDITAR USUARIOS</button>
    <button><a type="button" href="http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">Volver</a></button>
    </div>
    <script>
        function EditUser(){
            window.location.href= "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/editar_usuarios.php";
        }
        function AnadirPista(){
            window.location.href= "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/anadir_pista.php";
        }
        function AdminReservas(){
            window.location.href= "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin_reservas.php";
        }
        function AdminPistas(){
            window.location.href= "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/admin_pistas.php";
        }
    </script>
    
</body>
</body>
</html>