<?php
function datos() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        try {
            require './includes/conexion_bd.php';
            $stmt = $coneccion->prepare("SELECT email, contra, rol, CONCAT(primer_nombre, ' ', primer_apellido) AS nombre FROM usuarios WHERE email = ?");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();

            if ($result && password_verify($password, $result['contra'])) {
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['rol'] = $result['rol'];
                $_SESSION['login'] = true;
                header('location: panel_principal.php');
                exit();
            } else {
                echo 'Usuario Y/O contraseña incorrectos';
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
?>