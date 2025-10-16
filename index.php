<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BOSON</title>

  <!-- Bootstrap CSS actualizado -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  >

  <!-- Tu CSS local -->
  <link rel="stylesheet" href="css/estilos.css" />

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){
      w[l]=w[l]||[];
      w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDRN492K');
  </script>
  <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDRN492K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- TOP -->
  <?php include("top.php"); ?>
  <!-- /TOP -->

  <!-- BANNER -->
  <div class="seccion-baner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="baner/01.png" class="d-block w-100" alt="Banner 1">
          <div class="carousel-caption">
            <a href="contacto.php" class="btn btn-success mt-3">Más Información</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="baner/02.png" class="d-block w-100" alt="Banner 2">
          <div class="carousel-caption">
            <a href="contacto.php" class="btn btn-success mt-3">Más Información</a>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
  <!-- /BANNER -->

  <!-- NOSOTROS -->
  <section class="seccion-color" id="seccion-color">
    <img src="imagenes/sombra-top.png" width="100%" alt="Sombra decorativa">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php
          include("conectarse.php");
          $consulta = mysqli_query($conexion,"SELECT * FROM contenidos WHERE seccion='portada'");
          while($re = mysqli_fetch_array($consulta)) { ?>
            <h1><span class="color1"><?php echo $re['titulo'];?></span></h1>
            <h3><?php echo $re['subtitulo'];?></h3>
            <div class="text-justify"><?php echo $re['contenido'];?></div>
            <a href="<?php echo $re['Link'];?>" class="btn btn-success mt-3">Ver Más</a>
          <?php } ?>
        </div>
        <div class="col-md-6 text-center">
          <img src="imagenes/nosotros.png" class="img-fluid" alt="Nosotros">
        </div>
      </div>
    </div>
  </section>
  <!-- /NOSOTROS -->

  <!-- SERVICIOS -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h1 class="color2">Nuestros Servicios</h1>
      </div>
      <div class="row">
        <?php
        include("conectarse.php");
        $consulta = mysqli_query($conexion,"SELECT * FROM categorias WHERE Estado='Activo' AND Menu='Principal' ORDER BY Id ASC");
        while($re = mysqli_fetch_array($consulta)) { ?>
          <div class="col-sm-6 col-md-4 mb-4 text-center">
            <a href="<?php echo $re['Link'];?>">
              <img src="imagenes/<?php echo $re['Foto'];?>" class="img-fluid zoom mb-3" alt="<?php echo $re['Nombre'];?>">
            </a>
            <h4><?php echo $re['Nombre'];?></h4>
            <a href="<?php echo $re['Link'];?>" class="btn btn-success">Ver Más</a>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- /SERVICIOS -->

  <!-- ABAJO -->
  <?php include("abajo.php"); ?>
  <!-- /ABAJO -->

  <!-- COPYRIGHT -->
  <footer class="copy text-center py-3 bg-light">
    2025 © Grupo Boson | <a href="https://www.boson.com.mx">boson.com.mx</a> | Todos los derechos reservados
  </footer>

  <!-- NAUTILUS -->
  <section class="fondo-negro text-center py-3">
    <a href="http://nautilus360.com" target="_blank">
      <img src="http://nautilus360.com/nautilus360.png" width="60" alt="Nautilus 360">
    </a>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.smoove.js"></script>
  <script>
    $('.block').smoove({ offset: '40%' });
  </script>

</body>
</html>
