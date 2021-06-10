<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDL WebCamp</title>


    <script src="https://kit.fontawesome.com/9b21360d5e.js" crossorigin="anonymous"></script>
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
                <img src="../build/img/logo.svg" alt="Logo de la barra de Navegacion">
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal">
                <a href="#">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitado</a>
                <a href="#">Reservas</a>
            </nav>
        </div><!--Cierre Contenedor-->
    </div><!--Cierre Barra-->
    



    <?php echo $contenido; ?>



    <!-- <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav data-cy="navegacion-footer" class="navegacion">
                <a href="/receta/crear">+ Receta</a>
                <a href="/categoria/crear">+ Categoria</a>
                <a href="/documentacion">Doc</a>
                <a href="/contacto">Contacto</a>
            </nav>
        </div>

        <p data-cy="copyright" class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy; Lekanda Dev</p>
    </footer> -->
    <script src="http://192.168.2.3/GDLwebcampMVC/public/build/js/bundle.min.js"></script>


</body>

</html>