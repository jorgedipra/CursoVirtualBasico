<?php
$view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('info.php');//se llama la informacion de la pagina
    }
?>
<link href="css/style.css" rel="stylesheet" /> 
<script class="cssdeck" src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/basicoescritorio.js"></script>	
<body>
	<div id="taskbar">
		<div class="copyright">
			OS Descritorio de Aprendisaje
		</div>
		<div id="clock"></div>
		<div id="logout"><a href="#">Home</a></div>
		<div id="preview"><a href="#">Atras</a></div>
	</div>
	<div id="main">
		<div id="carpeta1" class="icon">
			<a class="name">Basico</a>
		</div>
		<div id="carpeta2" class="icon">
			<a class="name">Medio</a>
		</div>
		<div id="carpeta3" class="icon">
			<a class="name">Avanzado</a>
		</div>
	</div>
</body>
</html>