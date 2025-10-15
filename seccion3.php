<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="description" content="Grupo Boson, Ingenier¨ªa 4.0, Automatizaciones, Tableros, Soluciones, Calidad de Energ¨ªa y proyectos de ingenieria en todo el bajio"/>
<meta name="keywords" content="Ingenier¨ªa 4.0 Automatizacion Tableros Proyectos de ingenieria Calidad de Energ¨ªa"/>
<meta name="keyphrases" content="Ingenier¨ªa 4.0 Automatizacion Tableros Proyectos de ingenieria Calidad de Energ¨ªa"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet"  href="css/bootstrap.css">
<title>Grupo Boson Soluciones y Actualizaciones</title>

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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TDRN492K');</script>
<!-- End Google Tag Manager -->

</head>
<body topmargin="0" onload="MM_preloadImages('imagenes/top-1.png')">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDRN492K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--- TOP --->
<header>
<section id="top">
<div class="container">
<div class="row">

<div class=" col-xs-12  col-sm-12  col-md-3 text-center block">
<img src="imagenes/logo.png" alt="
Grupo Techgnosis" width="90%" />
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
</div>        
    
</div>     
</div>
</section>
</header>
<!--- TOP --->


<!--- MENU --->
    <nav class="navbar navbar-expand-lg fixed-top navbar-default">
      <div class="container">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav mr-auto">

<?php include("conectarse.php");$consulta = mysql_query
	  ("select * from categorias where Estado='Activo'and Menu='Izquierdo'",$conexion)
	  ;while($re=mysql_fetch_array($consulta)){ ?>
      <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
<? } ?>             
           
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Nosotros</a>
<ul class="dropdown-menu  ">
			        <?php include("conectarse.php");$consulta = mysql_query
("select * from categorias where Estado='Activo'and Menu='Nosotros' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
                    <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
                    <? } ?>          
</ul>
</li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Industria 4.0</a>
<ul class="dropdown-menu">
			        <?php include("conectarse.php");$consulta = mysql_query
("select * from categorias where Estado='Activo'and Menu='industria' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
                    <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
                    <? } ?>          
</ul>
</li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Automatizaci&oacute;n</a>
<ul class="dropdown-menu">

	<?php include("conectarse.php");$consulta = mysql_query
	("select * from categorias where Estado='Activo'and Menu='system' order by id",$conexion);				
	while($re=mysql_fetch_array($consulta)){ ?>
	<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
	<? } ?> 


	<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="seccion2.php?cve=plc">PLC'S
    </a>
		<ul class="dropdown-menu">         
			
            <?php include("conectarse.php");$consulta = mysql_query
		    ("select * from categorias where Estado='Activo'and Menu='plc' order by id",$conexion);				
		    while($re=mysql_fetch_array($consulta)){ ?>
		   <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
		   <? } ?>   		
                    
		</ul>
	</li>            
    </li>
  
	<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=redes">Redes
    </a>
	<ul class="dropdown-menu">      
    <?php include("conectarse.php");$consulta = mysql_query ("select * from categorias where Estado='Activo'and Menu='redes' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
	<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
	</ul>          
	</li> 
              
                
	<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=programacion">Programaci&oacute;n</a>
	<ul class="dropdown-menu">      

    <?php include("conectarse.php");$consulta = mysql_query ("select * from categorias where Estado='Activo'and Menu='programacion' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
	<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
	</ul>   
	</li>

</ul>
</li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=proyectos">Proyectos</a>
<ul class="dropdown-menu">

<?php include("conectarse.php");$consulta = mysql_query ("select * from categorias where Estado='Activo'and Menu='proyectos' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
    
</ul>
</li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=tableros">Tableros</a>
<ul class="dropdown-menu">
    
	<?php include("conectarse.php");$consulta = mysql_query ("select * from categorias where Estado='Activo'and Menu='tableros' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  

</ul>               
</li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=calidad">Calidad de Energia</a>
<ul class="dropdown-menu">
                
<?php include("conectarse.php");$consulta = mysql_query ("select * from categorias where Estado='Activo'and Menu='calidad' order by id",$conexion);				
while($re=mysql_fetch_array($consulta)){ ?>
<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
</ul>          
</li>  
 
</ul>
</li>





</ul>


<!-------------------- derecho ---------------------->
<ul class="nav navbar-nav navbar-right">
<?php include("conectarse.php");$consulta = mysql_query
	  ("select * from categorias where Estado='Activo'and Menu='Derecho' order by id",$conexion)
	  ;while($re=mysql_fetch_array($consulta)){ ?>

 <li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
      <? } ?>  
</ul>
<!-------------------- derecho ---------------------->  

</div>
</div>
</div>
</nav>
<!--- MENU --->



<?php
include("conectarse.php");
$clave = $_GET['cve'];
$consulta = mysql_query("select * from contenidos where seccion2='$clave' and estado='activo' limit 1",$conexion);
while($re=mysql_fetch_array($consulta)){ ?> 
<img src="imagenes/top-<?php echo $re['seccion'];?>.png" width="100%" />
<? } ?> 





<!---------------- TITULO REGRESAR ---------------->
<section>
  <div class="container">
		<div class="row">
		  
          <div class=" col-xs-12  col-sm-12  col-md-12  text-left">
          <p></p>
   
          <a href="javascript:window.history.back();" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('regresar','','imagenes/atras-2.png',1)">
          <img src="imagenes/atras.png" width="120" id="regresar" /></a>
         
          <hr />
		  </div>
          
		</div>
  </div> 
</section>    
<!--------------- TITULO REGRESAR --------------->



<!--------------- SECCIONES --------------->  
<div class="container">
<div class=" col-xs-12  col-sm-12  col-md-12 text-center">
<?php
include("conectarse.php");
$clave = $_GET['cve'];
$consulta = mysql_query("select * from categorias where Menu='$clave' and estado='activo' limit 1",$conexion);
while($re=mysql_fetch_array($consulta)){ ?> 
<h1 class="color1"><?php echo $re['Titulo'];?></h1>
<? } ?> 

</div> 
</div> 








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
;$consulta = mysql_query("select *from categorias where Estado='Automa' order by Id",$conexion); while($re=mysql_fetch_array($consulta)){ ?>

<div class="col-xs-6  col-sm-4">

<table width="90%" align="center" cellpadding="5" cellspacing="5">
<tr>
<td align="center">
<a href="<?php echo $re['Link'];?>">
<img src="imagenes/<?php echo $re['Foto'];?>" class="zoom" width="100%" ></a>

<h4><?php echo $re['Nombre'];?></h4>
<a href="<?php echo $re['Link'];?>">
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







<p><br/></p>
 
<!--------------- SECCIONES --------------->    






<!------- ABAJO ------>
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
      <strong>UbicaciÃ³n:</strong>
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
<!------- ABAJO ------>

<!---------------- FINAl ---------------->
  
<section class="copy">
	<div class="container">
    	<div class=" col-xs-12  col-sm-12  col-md-12  text-center "> 
   			Â© Grupo Boson |  www.boson.com.mx | Todos los derechos reservados
    	</div>
	</div> 
</section>    

<!--------------- FINAl --------------->

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

    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.smartmenus.js"></script>
    <script type="text/javascript" src="jquery.smartmenus.bootstrap-4.js"></script>    
    
    

</body>
</html>
