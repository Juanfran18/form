<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>::Proyecto_1::</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<!--  STEP ONE: insert path to SWFObject JavaScript -->
		<script language="JavaScript" type="text/javascript"><!--
			var txt="::Proyecto 1::...::Grupo 9::...";
			var refresco=null;
			function titulo() {
			document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0); 
			refresco=setTimeout("titulo()",200);}
			titulo();
			// -->
		</script>
		<?php
			$Nombre = $_POST['txtNombre'];
			$Edad = $_POST['txtEdad'];
			$Sexo = $_POST['Genero'];			
			$Nota = $_POST['txtNota'];		
			$archivo = fopen("grupo9.txt","a");			
			$contenido="\n\r$Nombre,$Edad,$Sexo,$Nota";				
			fputs($archivo,$contenido);
			fclose($archivo);
		?>

	</head>

	<body>	 
		<div id="head">
			<ul>
			 <li><a class="active" href="index.html">Ingreso de Datos</a></li>
			 <li><a href="about.html">Ver Resultado</a></li>   
			</ul>
			<div id="head_cen">     
				<div id="head_sup" class="head_height">	
					<br>
					<CENTER>
						<TABLE BORDER=0>
						    <tr></tr>
							<tr></tr>
							<tr><td><h4> Sus datos fueron enviados correctamente.</h4></td></tr>
							<tr><td><h4><center><a href="index.html">Click para volver a llenarlo</a></center></h4></td></tr>
							
						</TABLE>
					</CENTER>
				</div>  
			</div>
		</div>
		<div id="foot">
			<div id="foot_cen"> 
				<ul>
					<Center>
						<li><a class="active" href="index.html">Ingreso de Datos</a></li>
						<li class="space">|</li>
						<li><a href="about.html">Ver Resultado</a></li>       
					</center>
				</ul>
				<center><p>© Your Copyright Info Here. Designed by: <a href="http://www.templateworld.com" target="_blank">Template World</a></p></center>
			</div>
		</div>
	</body>
</html>
