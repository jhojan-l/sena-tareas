<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>senatareas</title>
    <link rel="stylesheet" href="/CSS/styles.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="titulo">
                <a href="/index.php">
                    <h1>
                        Senatareas
                    </h1>
                </a>
            </div>
            <div class="enlaces">
                <?php
               

                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                ?>
                <a href="/funciones/cerrar_sesion.php">cerrar sesion</a>
                <?php
                }else{
                    echo '<a href="/login.php">Iniciar sesion</a>';
                    echo '<a href="/funciones/insertar_registro.php">Crear cuenta</a>';
                }

                ?>
            </div>
        </div>

    </header>


