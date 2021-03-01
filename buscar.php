<?php
include("php/conexion.php");
include("php/validarsesion.php");


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css\estilo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div id="logo">
        <img src="img/logo.jpg" alt="logo">

      </div>
      <nav class="menu">
        <ul>
          <li> <a href="index.html">inicio</a> </li>
          <li> <a href="miperfil.php">mi perfil</a> </li>
          <li> <a href="amigos.php">mis amigos</a> </li>
          <li> <a href="fotos.php">mis fotos</a> </li>
          <li> <a href="buscar.php">buscar amigos</a> </li>
          <li><a href="php/cerrarsesion.php">cerrar sesion</a></li>
        </ul>

      </nav>

    </header>
    <section id="recuadros">
      <h2>encuentra nuevos amigos</h2>
      <?php $consulta= "SELECT * FROM persona P WHERE P.nickname !='$nickname' AND P.nickname NOT IN (SELECT a.nickname2 FROM amistad A WHERE A.nickname1='$nickname')";
      $datos = mysqli_query($conexion , $consulta);
      while($fila = mysqli_fetch_array($datos)){
       ?>
      <section class="recuadro">
        <img src="<?php echo $fila['fotodeperfil'] ?>" alt="" height="150">
        <h2><?php echo $fila['nombre'] ?></h2>
        <p class="parrafo">
          <?php echo $fila['descripcion'] ?>
        </p>
        <a href="<?php echo "perfil.php?nickname=".$fila['nickname'] ?>" class="boton">ver perfil</a>
        <a href="<?php "php/agregaramigo.php?nickname=".$fila['nickname'] ?>"class="boton">agregar</a><br><br>

      </section>
    <?php } ?>
    </section>

  </body>
</html>
