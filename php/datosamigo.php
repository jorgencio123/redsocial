<?php

if($nickname=$nicknamea){
  header('Location: miperfil.php')
}
$consulta = "SELECT * FROM persona WHERE nickname = '$nicknamea'";
$consulta = mysqli_query($conexion,$consulta);
$consulta=mysqli_fetch_array($consulta);

$nombrea=$consulta['nombre'];
$apellidosa=$consulta['apellidos'];
$edada=$consulta['edad'];
$descripciona=$consulta['descripcion'];
$fotoperfila=$consulta['fotoperfil'];


 ?>
