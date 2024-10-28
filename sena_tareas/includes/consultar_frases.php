
<?php
require './includes/conexion_bd.php';


function obtenerFraseAleatoria($coneccion) {
    $consulta = "SELECT frasescol FROM frases ORDER BY RAND() LIMIT 1";
    $resultado = mysqli_query($coneccion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        return $fila['frasescol'];
    } 
}

$fraseAleatoria = obtenerFraseAleatoria($coneccion);
?>
