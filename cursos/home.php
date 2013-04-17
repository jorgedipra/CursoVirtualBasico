<?php
      include_once ('info.php');//se llama la informacion de la pagina
      include_once('recursos/barra.php');//se llama a la barra de navegacion
?>
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
<a class="name"href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','/url')">	
		<div id="carpeta2" class="icon">
			Medio
		</div>
</a>		
<a class="name"href="#newbar" onclick="javascript:fun_iFrameWrite('iFrame_SQL','img/null.gif')">		
		<div id="carpeta3" class="icon">
			Avanzado
		</div>
</a>	
	</div>	
</body>
</html>