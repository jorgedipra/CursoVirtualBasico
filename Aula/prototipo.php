<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendtrans(duration=1)">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
<meta name="description" content="Cursos virtuales">
<meta property="og:title" content="Cursos Virtuales" />
<meta property="og:type" content="software de aprendisaje" />
<meta property="og:url" content=" "/>
<meta property="og:image" content="logo.png" />
<meta property="og:site_name" content=" " />
<title>CursoVirtual</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/screen.css">
<script src="script/jquery.min.js"></script>
<script src="script/modernizr.custom.04022.js"></script>
<script src="script/scrtip.js"></script> 
<?php
$TituloVideo=$_POST["Titulo"];
$UrlVideo=$_POST["Video"];
$TituloTexto=$_POST["TituloTexto"];
$texto=$_POST["texto"];
?>
<script type="text/javascript">
  function texto (){

                document.getElementById ("Descripcion").value = "<?php echo $texto; ?>";                 

            }
</script>
</head>
<body onload="texto ();">
<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Crea</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Demo</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Permiso</label>
            
			    <div class="clear-shadow"></div>
			
		        <div class="content">
			        <div class="content-1">		
						<h2>Formulario</h2>				

<form name="Control" action="prototipo.php" method="POST">

<p>
Titulo de video:<input value="<?php echo $TituloVideo ?>" type ="text" name="Titulo" autocomplete="off"  required><br>
</p>
<p>
video(url): 	<input value="<?php echo $UrlVideo ?>" type ="url" name="Video"  autocomplete="off" required="url"><br>
</p>
<p>
Titulo texto: 	<input value="<?php echo $TituloTexto ?>" type ="text" name="TituloTexto" autocomplete="off" required><br>
</p>
<p>
Texto:<br> 		<input id="Descripcion" name="texto" required/><br>
</p>
<input type="submit" value="enviar">
<input type="reset" value="Restaurar">
</form>

						<h3>dddd</h3>

					</div>
			        <div id="contenedor" class="content-2">
	<section id="contenedos"> 
		<ul>
		<li id="Autivisual">
			<h1><span id="stTitulo"><?php echo $TituloVideo; ?></span></h1>	

			<iframe  src=<?php echo  '"'.$UrlVideo.'"'; ?>frameborder="0" allowfullscreen></iframe>
		</li>
		<li id="intruductorio">
			<h2><span id="staTT"><?php echo $TituloTexto; ?></span></h2>	
			<section id="texto">
				<article class="scrollbar" id="style-7">
				<span id="textV"><?php echo $texto; ?></span>
				</article>
				<article class="force-overflow"></article>
			</section>
		</li>
		<li id="bloque1" class="bloque"><article>TEORIA</article></li>
		<li id="bloque2" class="bloque"><article>TALLERES</article></li>
		<li id="bloque3" class="bloque"><article>HERRAMIENTAS</article>
		</li>
	</ul>
	</section>
				    </div>
			        <div class="content-3">
						<h2></h2>
						<p></p>
						<p></p>
						<h3></h3>
						<p></p>
				    </div>
		        </div>
			</section>	
</body>			  
</html>