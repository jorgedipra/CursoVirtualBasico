<?php
  
if (isset($_GET['Titulo'])) {

  sleep(0.999);

  $msg=$_GET['Titulo'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
 
}
if (isset($_GET['TituloTexto'])) {
  sleep(0.999);

  $msg=$_GET['TituloTexto'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
}
if (isset($_GET['Video'])) {
  sleep(0.999);

  $msg=$_GET['Video'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
}
if (isset($_GET['texto'])) {
  sleep(0.999);

  $msg=$_GET['texto'];  
  $json=array("msg" => $msg);
 
  echo json_encode($json);
}
 
?>