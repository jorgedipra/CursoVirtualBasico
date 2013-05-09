<?php
  
if (isset($_GET['Titulo'])) {

  sleep(0.999);

  $checking=false;
  $msg=$_GET['Titulo'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
 
}
if (isset($_GET['TituloTexto'])) {

  sleep(0.999);

  $checking=false;
  $msg=$_GET['TituloTexto'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
 
}
 
?>