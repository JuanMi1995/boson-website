
<html>
<title></title>
 <?php	
  
$mysql_host = "localhost";
$mysql_database = "adminbos_01";
$mysql_user = "adminbos_01";
$mysql_password = "Nautilus(360)";
  
  
  
   if (!($conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($conexion,$mysql_database)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 






?>





