<?php
session_start();
include 'includes/header.php';

?>
<div class="bienvenido">
<p > Bienvenido <?php echo $_SESSION['rol'] . ' ' . $_SESSION['nombre']; ?></p>
</div>  

<?php
include './includes/conexion_bd.php';

if ($_SESSION['rol'] == 'instructor') {
    require __DIR__ . '/includes/panel_instructor.php';   
} else {
    require __DIR__ . '/includes/consultar_aprendiz.php';
}

include 'includes/footer.php'
?>
