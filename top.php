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

				<div class=" col-xs-12  col-sm-12  col-md-3  text-right" style="padding-top:10px;">
					<!-- WHATS NUMERO 
					<?php include("conectarse.php");$consulta = mysqli_query
					($conexion,"select * from info where tipo ='whatsapp' and menu='top'"); while($re=mysqli_fetch_array($consulta)){ ?>
					<span class="whats"><?php echo $re['nombre'];?></span> <img src="imagenes/whatsap.png" width="25" /><? } ?>
					</br>
					WHATS NUMERO -->
					<!-- FACE 
					<?php include("conectarse.php");$consulta = mysqli_query
					($conexion,"select * from redes where red ='facebook'"); while($re=mysqli_fetch_array($consulta)){ ?>
					<h4><?php echo $re['nombre'];?> <a href="<?php echo $re['link'];?>" target="_blank">
					<a href="<?php echo $re['link'];?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('face','','imagenes/face2.png',1)"><img src="imagenes/face.png" width="30" id="face" target="_blank "/></a>
					</h4>
					<? } ?>
					FACE -->
				</div>        
				
			</div>     
		</div>
	</section>
</header>



<!--- MENU --->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm"> 
<!--<nav class="navbar navbar-expand-lg fixed-top navbar-default">-->
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

			<?php include("conectarse.php");$consulta = mysqli_query
				($conexion,"select * from categorias where Estado='Activo'and Menu='Izquierdo'")
				;while($re=mysqli_fetch_array($consulta)){ ?>
				<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
			<? } ?>             
					
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Nosotros</a>
			<ul class="dropdown-menu  ">
								<?php include("conectarse.php");$consulta = mysqli_query
			($conexion,"select * from categorias where Estado='Activo'and Menu='Nosotros' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
								<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
								<? } ?>          
			</ul>
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Industria 4.0</a>
			<ul class="dropdown-menu">
								<?php include("conectarse.php");$consulta = mysqli_query
			($conexion,"select * from categorias where Estado='Activo'and Menu='industria' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
								<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
								<? } ?>          
			</ul>
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Automatizaci&oacute;n</a>
			<ul class="dropdown-menu">

				<?php include("conectarse.php");$consulta = mysqli_query
				($conexion,"select * from categorias where Estado='Activo'and Menu='system' order by id");				
				while($re=mysqli_fetch_array($consulta)){ ?>
				<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
				<? } ?> 


				<li class="dropdown">
				
				<a class="dropdown-item dropdown-toggle" href="seccion2.php?cve=plc">
				PLC'S &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; > 
				</a>
					<ul class="dropdown-menu">         
						
						<?php include("conectarse.php");$consulta = mysqli_query
						($conexion,"select * from categorias where Estado='Activo'and Menu='plc' order by id");				
						while($re=mysqli_fetch_array($consulta)){ ?>
					<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
					<? } ?>   		
								
					</ul>
				</li>            
				</li>
			
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=redes">
				Redes &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; > 
				</a>
				<ul class="dropdown-menu">      
				<?php include("conectarse.php");$consulta = mysqli_query ($conexion,"select * from categorias where Estado='Activo'and Menu='redes' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
				<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
				</ul>          
				</li> 
						
							
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=programacion">
				Programaci&oacute;n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  >     </a>
				<ul class="dropdown-menu">      

				<?php include("conectarse.php");$consulta = mysqli_query ($conexion,"select * from categorias where Estado='Activo'and Menu='programacion' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
				<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
				</ul>   
				</li>

			</ul>
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=proyectos">Proyectos</a>
			<ul class="dropdown-menu">

			<?php include("conectarse.php");$consulta = mysqli_query ($conexion,"select * from categorias where Estado='Activo'and Menu='proyectos' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
			<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
				
			</ul>
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=tableros">Tableros</a>
			<ul class="dropdown-menu">
				
				<?php include("conectarse.php");$consulta = mysqli_query ($conexion,"select * from categorias where Estado='Activo'and Menu='tableros' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
			<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  

			</ul>               
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="seccion2.php?cve=calidad">Calidad de Energia</a>
			<ul class="dropdown-menu">
							
			<?php include("conectarse.php");$consulta = mysqli_query ($conexion,"select * from categorias where Estado='Activo'and Menu='calidad' order by id");				
			while($re=mysqli_fetch_array($consulta)){ ?>
			<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li><? } ?>  
			</ul>          
			</li>  
			
			</ul>
			</li>





			</ul>


			<!-------------------- derecho ---------------------->
			<ul class="nav navbar-nav navbar-right">
				<?php include("conectarse.php");$consulta = mysqli_query
					($conexion,"select * from categorias where Estado='Activo'and Menu='Derecho' order by id")
					;while($re=mysqli_fetch_array($consulta)){ ?>

				<li><a href="<?php echo $re['Link'];?>"><?php echo $re['Nombre'];?></a></li>
					<? } ?>  
			</ul>
			<!-------------------- derecho ---------------------->  

			</div>
		</div>
	</div>
</nav>