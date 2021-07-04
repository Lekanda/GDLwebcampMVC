<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDL WebCamp MVC</title>


    <script src="https://kit.fontawesome.com/9b21360d5e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>

                <div class="informacion-evento">
                    <div>
                        <p class="fecha"><i class="fas fa-calendar-alt"></i>10-12 Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Dima, EH</p>
                    </div>
                    <h1 class="nombre-sitio">GdlWebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>
                </div>
            </div>
            <!--.hero-->
        </div>
    </header>

    <div class="barra barra-navegacion">
        <div class="contenedor">
            <div class="logo">
                <a href="/"><img src="../build/img/logo.svg" alt="Logo de la barra de Navegacion"></a>
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal">
                <a id="nav-confe" href="/conferencia">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitado</a>
                <a href="/registro">Reservas</a>
            </nav>
        </div>
        <!--Cierre Contenedor-->
    </div>
    <!--Cierre Barra-->




    <?php echo $contenido; ?>



    <footer class="site-footer">
        <div class="contenedor footer-up">
            <div class="footer-informacion">
                <h3>Sobre <span>gdlwebcamp</span></h3>
                <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut
                    bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci.
                    Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <a class="twitter-timeline footer-twitter" data-height="400" data-theme="light" data-link-color="#fe4918" href="https://twitter.com/abernaolao"> <i class="fa fa-twitter" aria-hidden="true"></i> Tweets by LekandaNet</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos Reservados GDLWEBCAMP 2021.
        </p>

    </footer>


    <script src="http://192.168.2.3/GDLwebcampMVC/public/build/js/bundle.min.js"></script>
    <script src="http://192.168.2.3/GDLwebcampMVC/src/js/plugins.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="http://192.168.2.3/GDLwebcampMVC/src/js/main.js"></script>
    <script src="http://192.168.2.3/GDLwebcampMVC/src/js/jquery.animateNumber.js"></script>


</body>

</html>