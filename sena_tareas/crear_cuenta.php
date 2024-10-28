<?php include 'includes/header.php'; ?>

<div class="form_fondo">
    <div class="form_registro">
        <form action="" method="post">
            <fieldset>
                <legend>crear cuenta</legend>
                <div class="campoRegistro">
                    <div class="campo">
                        <label for="identifica">Identificacion</label>
                        <input type="text" id="identifica" name="identifica" placeholder="identificacion" 
                        required>
                    </div>
                    <div class="campo">
                        <label for="nombre1">Primer nombre</label>
                        <input type="text" id="nombre1" name="nombre1" placeholder="escriba su primer nombre" 
                        required>
                    </div>
                    <div class="campo">
                        <label for="nombre2">segundo nombre</label>
                        <input type="text" id="nombre2" name="nombre2" placeholder="escriba su segundo nombre" 
                        required>
                    </div>
                    <div class="campo">
                        <label for="apellido1">Primer apellido</label>
                        <input type="text" id="apellido1" name="apellido1" placeholder="escriba su apellido paterno" 
                        required>
                    </div>
                    <div class="campo">
                        <label for="apellido2">segundo apellido</label>
                        <input type="text" id="apellido2" name="apellido2" placeholder="escriba su apellido materno">
                    </div>
                    <div class="campo">
                        <label for="fecha_nac">fecha de nacimiento</label>
                        <input type="date" id="fecha_nac" name="fecha_nac" placeholder="diligencia su fecha de nacimiento" required >
                    </div>
                    <div class="campo">
                        <label for="celular">celular</label>
                        <input type="text" id="celular" name="celular" placeholder="ingrese su #telefono" required >
                    </div>
                    <div class="campo">
                        <label for="email">correo</label>
                        <input type="email" id="email" name="email" placeholder="example@correo.com" required >
                    </div>
                    </div>
                <div class="campo">                     
                    <label for="rol">Rol</label>                     
                    <select id="rol" name="rol" required>                         
                        <option value="">Seleccione un rol</option>                         
                        <option value="aprendiz">Aprendiz</option>                         
                        <option value="instructor">Instructor</option>                     
                    </select>                 
                    </div>
                    <div class="campo">
                        <label for="contra">contraseña</label>
                        <input type="password" id="contra" name="contra" placeholder="escribe una clave segura">
                    </div>
                    <div class="campo" class>
                        <input type="submit" value="crear cuenta" class="btn">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php

function capturarDatos()
{
    if ($_SERVER ['REQUEST_METHOD'] == "POST") {

        return $_POST;

    }
}

include 'includes/footer.php';