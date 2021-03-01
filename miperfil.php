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
        <img src="img\logo.jpg" alt="logo">
      </div>
      <nav class="menu">
        <ul>
          <li> <a href="index.html">inicio</a> </li>
          <li> <a href="miperfil.php">mi perfil</a></li>
          <li><a href="amigos.php">mis amigos</a></li>
          <li><a href="fotos.php">mis fotos</a></li>
          <li><a href="buscar.php">buscar amigos</a></li>
          <li><a href="php/cerrarsesion.php">cerrar sesion</a></li>
        </ul>
      </nav>
    </header>

    <section id="perfil">
      <img src="<?php echo $_SESSION['fotoperfil']?>" alt="">
      <h1><?php echo "$_SESSION[nombre] $_SESSION[apellidos]" ?></h1>
      <p><?php echo "$_SESSION[descripcion]" ?></p>
    </section>

    <section id="recuadros">
      <h2>mis amigos</h2>
      <?php
      $consulta="SELECT * FROM persona P WHERE P.nickname in (SELECT A.nickname2 FROM amistad A WHERE A.nickname1='$nickname') LIMIT 3";
      $datos = mysqli_query($conexion,$consulta);
      while($fila=mysqli_fetch_array($datos)){

       ?>
    </section>
    <section class="recuadro">
      <img src="<?php echo $fila['fotoperfil']; ?>" height="150">
      <h2><?php echo $fila['nombre'] . " " . $fila['apellidos']; ?></h2>
      <p class="parrafo"> <?php echo $fila['descripcion']; ?></p>
      <a href="<?php echo "perfil.php?nickname=".$fila['nickname']; ?>">ver perfil</a>

    </section>


  <?php } ?>

  <section id="recuadros">
    <h2>mis fotos</h2>
    <?php

    $consulta = "SELECT * FROM `fotos` F WHERE F.nickname='$nickname' LIMIT 3";
    $datos = mysqli_query($conexion, $consulta);
    while($fila=mysqli_fetch_array($datos)){

      ?>

    <section class="recuadro">
      <img src="<?php echo $fila['nombrefoto'] ?>" height="200" width="280" alt="">
    </section>
  <?php } ?>



  </section>
  </body>
</html>
