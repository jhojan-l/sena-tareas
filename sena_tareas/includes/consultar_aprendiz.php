<?php

function consultarAprendices()
{
    try {
        require __DIR__.'/conexion_bd.php';

        $sql = "SELECT 
                    CONCAT(a.primer_nombre, ' ', COALESCE(a.segundo_nombre, ''), ' ', a.primer_apellido, ' ', COALESCE(a.segundo_apellido, '')) AS nombre, 
                    a.cod, 
                    a.fecha_nac AS edad, 
                    a.celular, 
                    usu.email 
                FROM 
                    aprendices a 
                INNER JOIN 
                    usuarios usu ON a.email = usu.email;";

        $consulta = mysqli_query($coneccion, $sql);

        if (!$consulta) {
            throw new Exception('Error en la consulta: ' . mysqli_error($coneccion));
        }

        return $consulta;
    } catch (\Throwable $th) {
        var_dump($th);
        return null; // Asegura que no se detenga el script.
    }
}
