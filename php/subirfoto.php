<?php
include("conexion.php");
include("validarsesion.php");

$consulta = "SELECT idfotos FROM `fotos` ORDER BY idfotos DESC Limit 1";
$consulta= mysqli_query($conexion , $consulta);
$consulta = mysqli_fetch_array($consulta);
$idfoto= $consulta['idfotos'];
++$idfoto;
$ubicacion = "img/$nickname/$idfoto";
$archivo=$_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo,"../$ubicacion")){
  echo "el archivo ha sido subido";
  $consulta="INSERT INTO fotos VALUES ('$idfoto' , '$nickname' , '$ubicacion')";

  if (mysqli_query($conexion,$consulta)){
    echo "tu imagen ha sido guardada";
    header('Location: ../fotos.php');
  }
  else{
    echo "ERROR: " .$consulta . "<br>" . mysqli_error($conexion);
    echo "<a href='../fotos.php'>volver.</a></div>";
  }



}
else {
  echo "ha ocurrido un error, trate de nuevo!";
  echo "<a href='../fotos.php'> volver </a> </div>";
}



 ?>
