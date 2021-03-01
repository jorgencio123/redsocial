<?php
include("validarsesion.php");
$ubicacion = "../img/" . $nickname . "/perfil.jpg";
$archivo = $_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo , $ubicacion)){

  echo "el archivo ha sido subido";
  header('Location: ../fotos.php');
}
else{
  echo "Ha ocurrido un error, trate de nuevo!";
  echo "<a href='../fotos.php'>volver.</a></div>";
}

 ?>
