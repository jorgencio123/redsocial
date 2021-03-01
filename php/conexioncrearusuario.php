<?php
include("conexion.php");

$nickname = $_POST["nickname"];
$nombre= $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$descripcion = $_POST["descripcion"];
$email = $_POST["correo"];
$password = $_POST["contraseña"];

$passwordhash=password_hash($password,PASSWORD_BCRYPT);
$fotoperfil="img/$nickname/perfil.jpg"; //nombre foto perfil por defecto

$consultaid="SELECT nickname FROM `persona` WHERE nickname ='$nickname'";

$consultaid=mysqli_query($conexion,$consultaid);
$consultaid=mysqli_fetch_array($consultaid);
if(!$consultaid){
  $sql = "INSERT INTO `persona` VALUES('$nickname','$nombre','$apellidos','$edad','$descripcion','$fotoperfil','$email','$passwordhash')";
  if(mysqli_query($conexion,$sql)){
    mkdir("../img/$nickname"); //creamos una carpeta en imagenes para el usuario
    copy("../img/arnold.jpg","../img/$nickname/perfil.jpg"); //copiamos nuestra foto por default
    echo "tu cuenta ha sido creada.";
    echo"<br> <a href='../index.html'> iniciar sesion </a> </div>";
  }
  else {
    echo "Error: ".$sql . "<br>" . mysqli_error($conexion);
  }
}
else {
  echo "el nickname ya existe.";
  echo"<a href='../index.html'> intentalo de nuevo. </a></div>";
}


//cerrando la conexion
mysqli_close($conexion);


 ?>
