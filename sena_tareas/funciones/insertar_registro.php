<?php
require '../crear_cuenta.php';
$insertar_datos = capturarDatos();
if ($insertar_datos === null) {
    die("No se han enviado datos.");
}

    $identificacion = intval($insertar_datos['identifica']);
    $nombre1 = $insertar_datos['nombre1'];
    $nombre2 = $insertar_datos['nombre2'];
    $apellido1 = $insertar_datos['apellido1'];
    $apellido2 = $insertar_datos['apellido2'];
    $fecha = $insertar_datos['fecha_nac'];
    $celular = $insertar_datos['celular'];
    $email = $insertar_datos['email']; 
    $rol = $insertar_datos['rol'];
    $contra = $insertar_datos['contra'];
    $fechaNac = date('Y-m-d', strtotime($fecha));
  
    // Incluir archivo de conexión
    require '../includes/conexion_bd.php';

    // Preparar la consulta

    if ($rol == 'aprendiz') {

    $sql = "INSERT INTO aprendices (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contra) VALUES ('$identificacion','$nombre1','$nombre2','$apellido1','$apellido2','$fechaNac' ,'$celular','$email','$contra')";
} else if($rol == 'instructor'){
    $sql = "INSERT INTO instructores (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contra) VALUES ('$identificacion','$nombre1','$nombre2','$apellido1','$apellido2','$fechaNac','$celular','$email','$contra')";
} 

    $sql1 = "INSERT INTO usuarios (email, contra, rol) VALUES ('$email','$contra', '$rol')";

    $consul = mysqli_query($coneccion,$sql);
    $consul1 = mysqli_query($coneccion,$sql1);