<?php
include("conexion.php");
include("validarsesion.php");

$nicknamea = $_GET['nickname'];
$consulta="INSERT INTO aamistad (nickname1 , nickname2) VALUES ('$nickname' , '$nicknamea')";
if(mysqli_query($conexion,$consulta)){

  $consulta = "INSERT INTO amistad (nickname1 , nickname2) VALUES ('$nicknamea' , '$nickname')";
  if(mysqli_query($conexion , $consulta)){
    echo "ahora tienes un nuevo amigo";
    header('Location:../buscar.php');
  }
  else {
    echo "error";
    echo "<a href='../buscar.php'> volver </a></div>";
  }
}else{
  echo "error"
  echo"<a href='../buscar.php'> volver </a></div>";
}



 ?>
