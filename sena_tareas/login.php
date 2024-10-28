<?php
include 'includes/header.php';
?>

<div class="wrapper">
    <div class="main-content">
        <div class="login-container">
            <div class="img_login">
                <img src="/img/logo.png" alt="logo_sena">
            </div>
            <div class="iniciar_session">
                <form action="" method="post">
                    <fieldset>
                        <legend>Iniciar sesión</legend>
                        <label for="usu">Usuario</label>
                        <input type="text" placeholder="Example@correo.com" id="usu" required name="email">
                        <label for="pass">Contraseña</label>
                        <input type="password" name="contra" id="pass" placeholder="valide su usuario" required>
                        <button type="submit">Iniciar sesión</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['contra'];
    session_start();
    try {
        require 'includes/conexion_bd.php';
        $sql = "SELECT  email, contra, rol FROM usuarios WHERE email='$correo' ";
        $consulta = mysqli_query($coneccion, $sql);
        $resul = mysqli_fetch_assoc($consulta);

        if ($_POST['contra'] == $resul['contra']) {
            $_SESSION['nombre'] = $resul['nombre'];
            $_SESSION['rol'] = $resul['rol'];
            $_SESSION['login']= true;
            header('location: panel_principal.php');
        } else {
            echo ('usuaio y/o contraseña no son correctos');
        }
    } catch (\Throwable $th) {
        echo ($th);
    }
}

include 'includes/footer.php';