<?php
$servidor = "localhost";
$usuario = "root";
$contraseña="";
$db="redsocial";


$conexion = mysqli_connect($servidor , $usuario , $contraseña , $db);

if(!$conexion){
  echo "falló la conexion <br>";
  die ("conexion fallida: " .mysqli_connect_error());
}
else{
  //echo "conexion exitosa";
}

 ?>
