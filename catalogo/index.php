<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="description" content="Prodcutos Naturistas"/>
<meta name="keywords" content="Prodcutos Naturistas"/>
<meta name="description" content="Prodcutos Naturistas"/>
<meta name="keyphrases" content="Montacargas en Guadalajara Renta y Venta"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet"  href="css/bootstrap.css">
<title>Grupo Boson Actualizaciones</title>

<!--- Zoom --->
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
    // Apply the Highslide settings
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
    hs.outlineWhileAnimating = true;
</script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">

      var flashvars = {};
      flashvars.cssSource = "piecemaker.css";
      flashvars.xmlSource = "photo_list.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '940', '420', '10', null, flashvars,    
      params, null);
    
</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
-->
<!--- Zoom --->

<!--- FACE ANTES </head> --->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1444267039216011";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--- FACE --->



</head>
<body topmargin="0" onload="MM_preloadImages('imagenes/top-1.png')">


<!--- TOP --->
<header>
<section id="top">
<div class="container">
<div class="row">

<div class=" col-xs-12  col-sm-12  col-md-3 text-center block">
<img src="imagenes/logo.png" alt="
Grupo Techgnosis" width="100%" />
</div> 

<div class=" col-xs-12  col-sm-12  col-md-6 text- block">
<a href="index.php"><img src="imagenes/colores.png" width="100%" /></a>
</div>  

<div class=" col-xs-12  col-sm-12  col-md-3  text-right">
<!-- WHATS NUMERO -->
<?php include("conectarse.php");$consulta = mysql_query
("select * from info where tipo ='whatsapp' and menu='top'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
<span class="whats"><?php echo $re['nombre'];?></span> <img src="imagenes/whatsap.png" width="25" /><? } ?>
</br>
<!-- WHATS NUMERO -->
<!-- FACE -->
<?php include("conectarse.php");$consulta = mysql_query
("select * from redes where red ='facebook'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
<span><?php echo $re['nombre'];?></span> <a href="<?php echo $re['link'];?>" target="_blank">
<a href="<?php echo $re['link'];?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('face','','imagenes/face2.png',1)"><img src="imagenes/face.png" width="22" id="face" target="_blank "/></a>
<? } ?>
<!-- FACE -->
</br>
<p></p>
<!-- WHATS DIRECTO -->
<?php include("conectarse.php");$consulta = mysql_query
("select * from info where tipo ='whatsapp' and menu='top'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
<a href="https://api.whatsapp.com/send?phone=521<?php echo $re['link'];?>&text=" target="_blank"> <button class="btn btn-success">Clik para enviar WatsApp 
</button></a>
<? } ?>
<p></p>
<!-- WHATS DIRECTO -->
</div>        
    
</div>     
</div>
</section>
</header>
<!--- TOP --->


<!--- MENU --->

<nav class="navbar navbar-default">
  <div class=" container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
      <?php include("conectarse.php");$consulta = mysql_query
	  ("select * from categorias where Estado='Activo'and Menu='Izquierdo'",$conexion)
	  ;while($re=mysql_fetch_array($consulta)){ ?>
         <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
      <? } ?>   



<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Nosotros<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='Nosotros' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>



<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Industria 4.0<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='industria' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Automatizaci&oacute;n<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='automatizacion' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>
         
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Proyectos<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='proyectos' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>    

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Tableros<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='tableros' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>             

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Calidad de la Energ&iacute;a<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<?php include("conectarse.php");$consulta = mysql_query
				("select * from categorias where Estado='Activo'and Menu='calidad' order by id",$conexion);				
				while($re=mysql_fetch_array($consulta)){ ?>
				<li>
            	<a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
                </li>
				<? } ?>
                <li>         
		  </ul>
</li>             
         
         
         
         
      </ul>

<!-------------------- derecho ---------------------->
<ul class="nav navbar-nav navbar-right">
<?php include("conectarse.php");$consulta = mysql_query
	  ("select * from categorias where Estado='Activo'and Menu='Derecho'",$conexion)
	  ;while($re=mysql_fetch_array($consulta)){ ?>

 <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
      <? } ?>  
</ul>
<!-------------------- derecho ---------------------->      

    </div>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--- MENU --->



<!-------------------------- BANNER ---------------------------->
<div class="seccion-baner" >
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
    <img src="baner/01.png" width="100%">
    <div class="carousel-caption d-none d-md-block">
    <p>&nbsp;</p>
    <a href="contacto.php"> <button class="btn btn-success"> Mas Informacion </button></a>
    <p>&nbsp;</p>
    </div>
    </div>
   
    <div class="item">
    <img src="baner/02.png" width="100%">
    <div class="carousel-caption d-none d-md-block">
    <p>&nbsp;</p>
    <a href="contacto.php"> <button class="btn btn-success"> Mas Informacion </button></a>
    <p>&nbsp;</p>
    </div>
    </div>
   
    
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<!-------------------------- BANNER ---------------------------->





<!---------------------- Nosotros -------------------->

<div class="seccion-color" id="seccion-color">
<img src="imagenes/sombra-top.png" width="100%"/>
<div class="container">
<div class="row">


<div class=" col-xs-12  col-sm-5 col-sm-offset-1  ">
<?php include("conectarse.php");$consulta = mysql_query("select * from contenidos where seccion ='portada'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
      
<h1> <div class="color1"><?php echo $re['titulo'];?></div></h1>
<h3><?php echo $re['subtitulo'];?></h3>
<div class="text-justify">
<?php echo $re['contenido'];?>
</div>
<p>&nbsp;</p>
<a href="<?php echo $re['link'];?>"> <button class="btn btn-success"> Ver Más</button></a>
<p>&nbsp;</p>
<? } ?>
</div>


<div class="col-xs-12  col-sm-12  col-md-5 col-md-offset-1  text-center block" data-move-y="50px">
<img src="imagenes/nosotros.png" width="100%">
<p><br></p>
</div>


</div>  
</div>   
</div>  
<!--- Nosotros --->




<!--- Productos --->
<div>
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-12 text-center"> 
<p><br></p>
<h1 class="color2">Nuestros Servicios</h1>
<p><br></p>
</div> 

<?php include("conectarse.php")
;$consulta = mysql_query("select * from productos where Estado ='Activo' and novedad ='Si'  order by id limit 6",$conexion); while($re=mysql_fetch_array($consulta)){ ?>

<div class="col-xs-6  col-sm-4  col-md-2 text-center">

<table width="90%" align="center" cellpadding="5" cellspacing="5">
<tr>
<td align="center">
<a href="single.php?cve=<?php echo $re[Id];?>"> 
<img src="catalogo/<?php echo $re['Foto'];?>" class="zoom" alt="Montacargas en Guadalajara Renta y Venta" width="100%" ></a>

<a href="<?php echo $re['Link'];?>">
</a>
<h4><?php echo $re['Nombre'];?></h4>
<a href="single.php?cve=<?php echo $re[Id];?>"> 
  <button class="btn btn-success">Ver Mas
  </button></a>
<p>&nbsp;</p>
</td>
</tr>
</table>
</div>

<? } ?> 

<div class="col-xs-12 col-sm-12 text-center"> 
<p><br></p>
<h1></h1>
<p><br></p>
</div> 


</div> 
</div> 
</div> 
<!--- Productos --->




<!-------------------- ABAJO ---------------------->
<footer>
<div class="container">
<div class="row">

      <div class="col-xs-12  col-sm-12  col-md-12  text-center">
	  <p></br></p>
	  <img src="imagenes/logo-2.png" width="200" />
	  <p></br></p>
      <img src="imagenes/div.png" width="100%"/>
      <p></br></p>
      </div>  
      
      
      <div class=" col-xs-12  col-sm-6  col-md-3 text-left">
      <img src="imagenes/info.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>Secciones de Interes</strong>
      <p></p>
<ul><?php include("conectarse.php");$consulta = mysql_query
	  ("select * from categorias where Seccion='abajo'and estado='activo'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>			
  <li>
      <a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a>
      </li>
      <? } ?>
    </ul>
      <p><br></p>
      </div>
          
      <div class=" col-xs-12  col-sm-6  col-md-3 ">
      <img src="imagenes/ubica.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>Ubicación:</strong>
      <p></p>
      <p>
        <?php include("conectarse.php");$consulta = mysql_query("select * from info where tipo ='direccion'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
        <?php echo $re['nombre'];?>
        <br /> <? } ?>
      </p>
      <a href="contacto.php"> 
      <button class="btn btn-success">Ver Mapa
      </button></a>
      </div>
    
      
      <div class=" col-xs-12  col-sm-6  col-md-3 col-lg-3  ">
      
      <p><img src="imagenes/telefono.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>Telefonos:</strong></strong>
      <p></p>
      <?php include("conectarse.php");$consulta = mysql_query("select * from info where tipo ='telefono'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
      <p></p>
	  <?php echo $re['nombre'];?><br>
      <p></p>
      <? } ?>
      <p><img src="imagenes/whatsap.png" width="30px" class="img-responsive"/>WhatsApp</p>
      <?php include("conectarse.php");$consulta = mysql_query("select * from info where tipo ='whatsapp'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
      <p></p>
	  <?php echo $re['nombre'];?><br>
      <p></p>
      <? } ?>
    
      </div>
      
      <div class=" col-xs-12  col-sm-6  col-md-3 col-lg-3  ">
      <img src="imagenes/mail.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>e-mail:</strong><p></p>
       <?php include("conectarse.php");$consulta = mysql_query("select * from info where tipo ='email'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
      <?php echo $re['nombre'];?>
      <br /> <? } ?>
      </p>
      
      <p></p>
      <strong>Siguenos:</strong>
      <p></p>
<table width="100" border="0" cellpadding="5" cellspacing="5">
<tr>
<?php include("conectarse.php");$consulta = mysql_query("select * from redes where estado ='activo'",$conexion); while($re=mysql_fetch_array($consulta)){ ?>
<td>
<a href="<?php echo $re['link'];?>" target="_blank"><img src="<?php echo $re['foto'];?>" width="30"/>
</a>
</td>
<? } ?>    
</tr>
</table>
</div>
      

<div class="col-xs-12  col-sm-12  col-md-12  text-center">
<p></br></p>
<nav>
 <a href="#top" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('arriba','','imagenes/top-1.png',1)">
<img src="imagenes/top.png" width="50" id="arriba" /></a>  
</nav>        
<p></br></p>
</div>  

      
              
</div>
</div>
</footer>
<!-------------------- ABAJO ---------------------->

<!---------------- FINAl ---------------->
  
<section class="copy">
	<div class="container">
    	<div class=" col-xs-12  col-sm-12  col-md-12  text-center "> 
   			© Grupo Boson |  www.boson.com.mx | Todos los derechos reservados
    	</div>
	</div> 
</section>    

<!--------------- FINAl --------------->


          
<!---------------- NAUTILUS ---------------->
  
<section class="fondo-negro" id="abajo">
	<div class="container">
    	<div class=" col-xs-12  col-sm-12  col-md-12  text-center "> 
            <p><a href="http://nautilus360.com" target="_blank"><img src="http://nautilus360.com/nautilus360.png" width="60" /></a></p>
    	</div>
	</div> 
</section>    

<!--------------- NAUTILUS --------------->

<!-- UP DOWN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script><script type="text/javascript" src="jquery.easing.1.3.js"></script><script type="text/javascript">
            $(function() {
                $('nav a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
        </script>
<!-- UP DOWN -->

<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smoove.js"></script>
	<script>$('.block').smoove({offset:'40%'});</script>

</body>
</html>
