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
<link   href="css/StyleBarra.css" rel="stylesheet" /> 
<link href='http://fonts.googleapis.com/css?family=Shojumaru' rel='stylesheet'>
<script src="script/jquery.min.js" class="cssdeck"></script>
<script src="script/basicoescritorio.js"></script>	
<div id="taskbar" >
     <div class="copyright ss-icon">
     	<span id="tituloOs">OS </span>
     	<span id="titulo"> Escritorio de Aprendizaje</span>
	   <section id="tituloHer">
	   <a class="Escritorio name" href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','img/null.gif')">
	   <img src="img/Desktop.png">
	   </a>
	   <a class="Informacion name" href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','/url')">
	   	<img src="img/Informacion.png">
	   </a>
	   <a class="Herramientas name" href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','/url')">
	   	<img src="img/Herramienta.png">
	   </a>
       </section>
		</div>
		<div id="clock"></div>
		<div id="logout"><a href="#">Home</a></div>
		<div id="preview"><a href="javascript:history.back(1)">Atras</a></div>
</div>
<link   href="css/StyleEscritorio.css" rel="stylesheet" /> 
<script src="script/escritorio.js "></script>
</head>
<body onload="javascript:fun_iFrameWrite('iFrame_SQL','')"> 
<iframe id="iFrame_SQL" name="iFrame_SQL"></iframe>	
	<div id="main">

<a class="name"href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','cursos/basico/index.php')">
		<div id="carpeta1" class="icon">
			Basico
		</div>
</a>	
<a class="name"href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','cursos/Medio/index.php')">	
		<div id="carpeta2" class="icon">
			Medio
		</div>
</a>		
<a class="name"href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','cursos/Avanzado/index.php')">		
		<div id="carpeta3" class="icon">
			Avanzado
		</div>
</a>	
	</div>	
</body>
</html>