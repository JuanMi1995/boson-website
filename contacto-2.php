<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="description" content="Grupo Boson, Ingenier��a 4.0, Automatizaciones, Tableros, Soluciones, Calidad de Energ��a y proyectos de ingenieria en todo el bajio"/>
<meta name="keywords" content="Ingenier��a 4.0 Automatizacion Tableros Proyectos de ingenieria Calidad de Energ��a"/>
<meta name="keyphrases" content="Ingenier��a 4.0 Automatizacion Tableros Proyectos de ingenieria Calidad de Energ��a"/>
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
<?php include ("top.php"); ?>
<!--- TOP --->




<!---------------------- Nosotros -------------------->

<div class="seccion-nosotros" id="seccion-nosotros">
<div class="container">
<div class="row">

<div class=" col-xs-12  col-sm-12  col-md-12 col-lg-12 text-center ">
<h1 class="color1">Contacto</h1>
<hr/>


<div class="row">
<div class=" col-xs-12  col-sm-12  col-md-6  col-md-offset-3  text-left ">
  <?php
  $msg= "";  
  $msg= "Mensaje del formulario de contacto pagina web ";  
  $msg.= "\nNombre: ". $_POST['nombre'];  
  $msg.= "\nTelefono: ".$_POST['telefono'];  
  $msg.= "\nE-mail: ".$_POST['email'];  
  $msg.= "\nMensaje: ".$_POST['mensaje'];  
  $remitente = $_POST['nombre'];  
  $subject = "Mensaje enviado desde contacto de pagina web por: ".$_POST['nombre'];  
  mail('info@boson.com.mx', $subject, $msg, "FROM: $remitente");  
    ?> 
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1">
    <tr>
      <td align="center"><p>Mensaje enviado </p>
        <p> <img src="imagenes/logo.png" width="166" /> </p></td>
      </tr>
    <tr>
      <td align="center"><p> GRACIAS POR CONTACTARNOS </p>
        <p>Su mensaje se ha enviado correctamente </p>
      
        
      </td>
      </tr>
  </table>
</div> 


<div class="col-xs-12  col-sm-12  col-md-12">
<p><br/></p>
</div> 



</div> 


</div>  
</div>   
</div>  </div>
<!--- Nosotros --->


<p></p>





<!-------------------- ABAJO ---------------------->
<?php include ("abajo.php"); ?>
<!-------------------- ABAJO ---------------------->

<!---------------- FINAl ---------------->
  
<section class="copy">
	<div class="container">
    	<div class=" col-xs-12  col-sm-12  col-md-12  text-center "> 
   			 Grupo Boson |  www.boson.com.mx | Todos los derechos reservados
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
