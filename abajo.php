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
<ul><?php include("conectarse.php");$consulta = mysqli_query
	  ($conexion,"select * from categorias where Seccion='abajo'and estado='activo'"); while($re=mysqli_fetch_array($consulta)){ ?>			
  <li>
      <a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
      <? } ?>
    </ul>
      <p><br></p>
      </div>
          
      <div class=" col-xs-12  col-sm-6  col-md-3 ">
      <img src="imagenes/ubica.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>Ubicacion:</strong>
      <p></p>
      <p>
        <?php include("conectarse.php");$consulta = mysqli_query($conexion,"select * from info where tipo ='direccion'"); while($re=mysqli_fetch_array($consulta)){ ?>
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


      <?php include("conectarse.php");$consulta = mysqli_query($conexion,"select * from info where tipo ='telefono'"); while($re=mysqli_fetch_array($consulta)){ ?>
      <p></p>
      <a href="tel:<?php echo $re['nombre']; ?>">
	  <p style="color:white;"><?php echo $re['nombre'];?></p>
	  </a>
      <? } ?>
      
      <p><img src="imagenes/whatsap.png" width="30px" class="img-responsive"/>WhatsApp</p>
      <?php include("conectarse.php");$consulta = mysqli_query($conexion,"select * from info where tipo ='whatsapp'"); while($re=mysqli_fetch_array($consulta)){ ?>
      <p></p>
      <a href="https://wa.me/52<?php echo $re['link']; ?>" target="_blank">
	  <p style="color:white;"><?php echo $re['nombre'];?></p></a>
      <p></p>
      <? } ?>
    
      </div>
      
      <div class=" col-xs-12  col-sm-6  col-md-3 col-lg-3  ">
      <img src="imagenes/mail.png" width="30px" class="img-responsive" />
      <p></p>
      <strong>e-mail:</strong>
      <p></p>
       <?php include("conectarse.php");$consulta = mysqli_query($conexion,"select * from info where tipo ='email'"); while($re=mysqli_fetch_array($consulta)){ ?>
       
        <a href="mailto:<?php echo $re['nombre'];?>" target="_blank">
          <p style="color:white;"> <?php echo $re['nombre'];?> </p>
        </a>  
      <br /> <? } ?>
      </p>
      
      <p></p>
      <strong>Siguenos:</strong>
      <p></p>
<table width="100" border="0" cellpadding="5" cellspacing="5">
<tr>
<?php include("conectarse.php");$consulta = mysqli_query($conexion,"select * from redes where estado ='activo'"); while($re=mysqli_fetch_array($consulta)){ ?>
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