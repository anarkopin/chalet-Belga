<?php
    require_once('recursos/header.php');

?>       
<div class="container">
    <ul class="slider">
        <li id="slide1">
            <img src="imagenes/belga3.png" alt="" width="1000px" height="500px">
        </li>
        <li id="slide2">
            <img src="imagenes/belga2.png" alt="" width="1000px" height="500px">
        </li>
    </ul>
    <ul class="menuslider">
        <li>
            <a href="#slide1">1</a>
        </li>
        <li>
            <a href="#slide2">2</a>
        </li>

    </ul>
</div>


<div class="seccion">
    <main>
        <div class="contenedor">
            <video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
                <source src="videos/keyboard.mp4" type="video/mp4">
            </video>
        </div>
    </main>

    <script>
        var reproductor = videojs('fm-video', {
            fluid: true
        });
    </script>
    

</div>  

<div class="home">
    
    <div class="centro" id="home1">
        <img src="imagenes/home/3.jpg" alt="" >
    </div >
    <div id="home1-5"> 
        <H3>TENEMOS NOTICIAS</H3>
        <p>Visitanos en nuestro nuevo restaurante</p>
        <img src="imagenes/San Isidro.png" alt="">
        <p>Un espacio donde también podrán disfrutar de la tradición de siempre acompañada de otras novedades.</p>
        <br/>
        <p>Visítanos de lunes a sábado de 12 pm. a 8 pm.
                y domingo de 12 pm. a 6 pm.</p>
    </div>
    
    <div class="centro" id="home2">
        <img src="imagenes/home/2.jpg" alt="">
    </div>
    <div class="centro" id="home2-5">    
        <img src="imagenes/home/6.jpg" alt="" >
    </div>


    <div class="centro" id="home3">
            <p>Ven a nuestro restaurante de</p>
            <img src="imagenes/Santa Clara.png" alt="">
            <p>Un espacio donde también podrán disfrutar de la tradición de siempre acompañada de otras novedades.</p>
            <br/>
            <p>Visítanos de lunes a sábado de 12 pm. a 8 pm.
            y domingo de 12 pm. a 6 pm.</p>
    </div>
    <div id="home3-5">
        <img src="imagenes/home/7.jpg" alt="">
    </div>



    <div class="centro" id="home4">
        <img src="imagenes/imagen2.png" alt="" width="300px" height="459px">
    </div>
        
    <div id="home4-5">
            
        <h3>VIVE LA EXPERIENCIA</h3>
        <img src="imagenes/en casa.png" alt="">
        <p>
            Queremos estar cerca de ustedes y lograr que revivan el ambiente de Granja Azul sobre sus mesas
        </p>
        <br/>
        <p>
            En nuestro delivery encontrarán el sabor de siempre en una gran presentación para compartir con quienes más quieren.
        </p>
            
        <div>
            <img src="imagenes/home/4.jpg" alt="" width="350px" height="180px">
        </div>
    </div>
    
</div>
    
<?php
    require_once('recursos/footer.php');
?>
