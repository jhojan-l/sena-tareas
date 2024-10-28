<?php

function consultarPreguntas()
{
    try {
        require __DIR__ . '/conexion_bd.php';

        $sql = "SELECT * FROM preguntas";

        $consulta = mysqli_query($coneccion, $sql);

        $preguntas = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $preguntas[] = $row;
        }

        return $preguntas;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}
