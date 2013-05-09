<?php
$a1="INTRODUCCION A HTML";
$a2="http://www.youtube.com/embed/oQMPfxeA6Kw";
$a3="INTRODUCCION";
$a4="texto textotexto texto texto textotexto texto texto".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "textotexto textotexto textotexto texto texto textotexto ".
 "texto";
?>
<script type="text/javascript">
  function texto (){
                document.getElementById ("Descripcion").value = "<?php echo $a4; ?>";
            }
</script>
<body onload="texto ();">
<form name="Control" action="prototipo.php" method="POST" target="_blank">

Titulo de video:<input value="<?php echo $a1 ?>" type ="text" name="Titulo" required><br>
video(url): 	<input value="<?php echo $a2 ?>" type ="text" name="Video" required><br>
Titulo texto: 	<input value="<?php echo $a3 ?>" type ="text" name="TituloTexto" required><br>
Texto:<br> 		<textarea id="Descripcion" name="texto" required></textarea><br>
<input type="submit" value="enviar">
<input type="reset" value="borrar">
</form>
</body>
