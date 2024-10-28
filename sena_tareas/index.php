<?php
include './includes/header.php';


?>
<div class="hero">
    <div class="hero_img">
        <img src="/img/img.jfif" alt="imagen_fondo">
        <div class="overlay">

<div class="frases">
       <?php 
       include './includes/conexion_bd.php';
       include './includes/consultar_frases.php';
       echo $fraseAleatoria
       ?> 
       </div>
            
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>