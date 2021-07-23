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
} else if (isset($_POST['enviar'])) {
    if (
    strlen($_POST['nombre']) >= 1 && 
    strlen($_POST['apellido']) >=1 && 
    strlen($_POST['direccion']) && 
    strlen($_POST['distrito']) >= 1 && 
    strlen($_POST['documento_identidad']) >=1 && 
    strlen($_POST['numero_documento']) >=1 && 
    strlen($_POST['correo']) >=1 && 
    strlen($_POST['telefeno_alternativo']) >=1 && 
    strlen($_POST['nombre_papa']) >=1 && 
    strlen($_POST['monto_reclamo']) >=1 && 
    strlen($_POST['tipo']) >=1 && 
    strlen($_POST['descripcion']) >=1
    ) {


        $nombre =$_POST["nombre"];
        $apellido =$_POST["apellido"];
        $direccion =$_POST["direccion"];
        $distrito =$_POST["distrito"];
        $documento_iden =$_POST["documento_identidad"];
        $numero_documento =$_POST["numero_documento"];
        $correo =$_POST["correo"];
        $telefono_dos =$_POST["telefeno_alternativo"];
        $nombre_papa =$_POST["nombre_papa"];
        $monto_reclamo =$_POST["monto_reclamo"];
        $pro_ser =$_POST["tipo"];
        $descripcion =$_POST["descripcion"];
        $id = rand(1,99);

        $insertarDatos = "INSERT INTO reclamaciones(nombre, apellido, direccion, distrito, documento_identidad, numero_documento, correo, telefeno_alternativo, nombre_papa, monto_reclamo, producto_servicio, descripcion,id) VALUES ('$nombre','$apellido','$direccion','$distrito','$documento_iden','$numero_documento','$correo','$telefono_dos','$nombre_papa','$monto_reclamo','$pro_ser','$descripcion', '$id')";

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