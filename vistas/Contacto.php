<?php
   require_once('../recursos/header.php');
   require_once('../recursos/conectar.php');
?>
<div class="box">

    <H3>PONTE EN CONTACTO CON NOSOTROS</H3>
    <p>Agradecemos nos brindes tu opinion sobre las mas desees
        con respecto a nuestro servicio.
    </p>
    <form method="post">
        <label for="" class="a"></label>
        <input type="text" id="nombre" name="nombre"
        placeholder="Nombre" />

        <label for="" class="b"></label>
        <input type="email" id="Correo" name="correo"
        placeholder="Correo" />

        <label for="" class="b"></label>
        <input type="tel" id="celular" name="numero"
        placeholder="Celular" />
        
        <label for="" class="c"></label>
        <textarea placeholder="Mensajes" name="mensaje"></textarea>
        <input type="submit" name="aceptar" value="aceptar">
    </form>
</div>
<?php
    require_once('../recursos/agregar.php');

    require_once('../recursos/footer.php');
?>















