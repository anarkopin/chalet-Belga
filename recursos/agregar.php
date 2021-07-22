<?php

if(isset($_POST['aceptar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >=1 && strlen($_POST['numero']) && strlen($_POST['mensaje']) >= 1) {

    
            $nombre =$_POST["nombre"];
            $correo =$_POST["correo"];
            $numero =$_POST["numero"];
            $mensaje =$_POST["mensaje"];
            $id = rand(1,99);

            $insertarDatos = "INSERT INTO datos(nombre, correo, numero,mensaje, id) VALUES ('$nombre','$correo','$numero','$mensaje', '$id')";

            $ejecutaInsertar = mysqli_query($enlace, $insertarDatos);

            if ($ejecutaInsertar) {
                ?>
                <h3 class="ok">Gracias por ponerte en contacto con nosotros, tu opinion es valiosa</h3>
                <?php
            
            } else {
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }

    } else {
        ?>
        <h3 class="bad">!Por favor completa los campos¡</h3>
        <?php
        }
    }       

?>