<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conexion = new mysqli($servername,$username,$password);

    /* if($conexion -> connect_error){
        echo "Conexion no realizada: ";
    }else{
        echo "Conexión realizada: ";
    }

    $orden = "CREATE DATABASE PLAYFUT";

    if($conexion->query($orden)){
        echo "Se crea la base de datos";
    }else{
        echo "Error en a creación de la bd ".$conexion->error;
    }*/
    
    $conexion=mysqli_connect("localhost","root","","PLAYFUT");
     /*$orden2 = " CREATE TABLE LOCALIDAD(
     ID_LOCALIDAD INT AUTO_INCREMENT,
     NOMBRE_LOCALIDAD VARCHAR (30),
     CONSTRAINT PK_LOCALIDAD PRIMARY KEY (ID_LOCALIDAD));
     ";

     $orden3 ="CREATE TABLE USUARIO(
     NOMBRE_USUARIO VARCHAR(40) UNIQUE,
     NOMBRE VARCHAR(30),
     APELLIDOS VARCHAR(40),
     CORREO VARCHAR(45) UNIQUE,
     DNI VARCHAR(9) UNIQUE,
     CONTRASENA VARCHAR(60),
     TELEFONO INT(9) UNIQUE,
     ID_LOCALIDAD INT,
     CONSTRAINT PK_USUARIO PRIMARY KEY(NOMBRE_USUARIO),
     CONSTRAINT FK_USUARIO FOREIGN KEY(ID_LOCALIDAD) REFERENCES LOCALIDAD(ID_LOCALIDAD));
     ";
     $orden4 ="CREATE TABLE RESERVA(
     ID_RESERVA INT AUTO_INCREMENT,
     HORA TIME,
     FECHA DATE,
     NOMBRE_USUARIO VARCHAR(40),
     CONSTRAINT PK_RESERVA PRIMARY KEY(ID_RESERVA),
     CONSTRAINT FK_RESERVA FOREIGN KEY(NOMBRE_USUARIO) REFERENCES USUARIO(NOMBRE_USUARIO));";
     $orden5 ="CREATE TABLE PISTA(
     ID_PISTA INT AUTO_INCREMENT,
     NOMBRE VARCHAR(40),
     CATEGORIA VARCHAR(30),
     ID_LOCALIDAD INT,
     ID_PISTA INT,
     CONSTRAINT PK_PISTA PRIMARY KEY(ID_PISTA),
     CONSTRAINT FK_PISTA1 FOREIGN KEY(ID_LOCALIDAD) REFERENCES LOCALIDAD(ID_LOCALIDAD),
     CONSTRAINT FK_PISTA2 FOREIGN KEY (ID_PISTA) REFERENCES PISTA(ID_PISTA));";
     $orden6="CREATE TABLE JUGADOR (
     NOMBRE_JUGADOR VARCHAR(40),
     CONSTRAINT PK_JUGADOR PRIMARY KEY(NOMBRE_JUGADOR)
     );";
     $orden7="CREATE TABLE PARTIDO(
     ID_PARTIDO INT AUTO_INCREMENT,
     ID_RESERVA INT,
     NOMBRE_USUARIO VARCHAR(40),
     ID_PISTA INT,
     CONSTRAINT PK_PARTIDO PRIMARY KEY(ID_PARTIDO),
     CONSTRAINT FK_PARTIDO1 FOREIGN KEY(ID_RESERVA) REFERENCES RESERVA(ID_RESERVA),
     CONSTRAINT FK_PARTIDO2 FOREIGN KEY(NOMBRE_USUARIO) REFERENCES USUARIO(NOMBRE_USUARIO),
     CONSTRAINT FK_PARTIDO3 FOREIGN KEY(ID_PISTA) REFERENCES PISTA(ID_PISTA));
     ";
     if($conexion->query($orden2)){
         echo "Se crea la tabla Localidad, ";
         if($conexion->query($orden3)){
             echo "Se crea la tabla Usuario, ";
             if($conexion->query($orden4)){
                 echo "Se crea la tabla Reserva, ";
                if($conexion->query($orden5)){
                     echo "Se crea la tabla Pista, ";
                    if($conexion->query($orden6)){
                         echo "Se crea la tabla Jugador, ";
                        if($conexion->query($orden7)){
                             echo "Se crea la tabla Partido, ";
                         }else{
                             echo "Error en la creación de la tabla Torneo: ".$conexion->error.", ";
                         }
                     }else{
                         echo "Error en la creación de la tabla Partido: ".$conexion->error.", ";
                     }
                 }else{
                     echo "Error en la creación de la tabla Pista: ".$conexion->error.", ";
                 }
             }else{
                 echo "Error en la creación de la tabla Usuario: ".$conexion->error.", ";
             }
         }else{
             echo "Error en la creación de la tabla Reserva: ".$conexion->error.", ";
         }
     }else{
         echo "Error en la creación de la tabla Localidad: ".$conexion->error.", ";
     }*/
?>