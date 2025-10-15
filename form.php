<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="css/bootstrap.css">
<link rel="stylesheet"  href="css/estilos.css">
<title></title>

<style type="text/css">
body,td,th {
	color: #333;
}
body {

}
</style>




</head>

<body leftmargin="0" topmargin="0">
<?php if (!isset($_POST['nombre'])) { ?>  
 
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
    <td width="85%" align="left"><p>Nombre</p></td>
    </tr>
  <tr>
    <td align="left"><p><input name="nombre" type="text" class="titulo2" id="nombre" size="40" /></p></td>
    </tr>
  <tr>
    <td align="left" valign="top"><p>Telefono</p></td>
    </tr>
  <tr>
    <td align="left" valign="top"><p><input name="telefono" type="text" class="titulo2" id="telefono" size="40" /></p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p>Email</p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p><input name="email" type="text" class="email" id="telefono2" size="40" /></p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p>Mensaje</p></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p><textarea name="mensaje" cols="42" rows="3" class="titulo2" id="mensaje"></textarea></p></td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <p>
        <input type="submit" class="btn btn-success" onclick="MM_validateForm('nombre','','R');return document.MM_returnValue" value=" Enviar " />
      </p>
    
    </td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  </table>
</form> 
<?php }else{  
     
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
    <td align="left"><p>Mensaje enviado </p>
      <p>
        <noscript>
          </noscript>
      <img src="imagenes/logo-2.png" width="166" /><img src="imagenes/colores.png" width="166" /></p></td>
    </tr>
  <tr>
    <td align="left"><p> GRACIAS POR CONTACTARNOS </p>
      <p>Su mensaje se ha enviado correctamente </p>
     
      
     </td>
    </tr>
</table>
<? } ?>
</body>
</html>
