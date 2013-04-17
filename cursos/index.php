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
		<div id="logout"><a href="#">Adelante</a></div>
		<div id="preview"><a href="#">Atras</a></div>
	</div>
	<div id="main">
		<div id="designs" class="icon">
			<div class="name">HTML</div>
		</div>
		<div id="projects" class="icon">
			<div class="name">CSS</div>
		</div>
		<div id="songs" class="icon">
			<div class="name">JAVASCRTIP</div>
		</div>
	</div>
</body>
</html>