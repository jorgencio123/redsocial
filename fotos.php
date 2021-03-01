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

    <section id="perfil">
      <img src="<?php echo "$_SESSION[fotoperfil]" ?>" alt="">
      <h1><?php echo "$_SESSION[nombre] $_SESSION[apellidos]" ?></h1>
      <form action="php/cambiarfoto.php" method="post" enctype="multipart/form-data">
        cambiar foto de perfil: <input type="file" name="archivo" required accept=".jpg , .jpeg , .png" , id="archivo">
        <input type="submit" name="subir" value="subir">
      </form>
    </section>

    <section id="recuadros">
      <h2>mis fotos</h2>
      <h3> <form class="" action="php/subirfoto.php" method="post" enctype="multipart/form-data">
        añadir imagen: <input id="archivo" type="file" name="archivo" accept=".jpg , .jpeg , .png" required>
        <input type="submit" name="subir" value="subir"></form></h3>

        <?php $consulta="SELECT * FROM fotos F WHERE F.nickname='$nickname'";
        $datos=mysqli_query($conexion,$consulta);
        while ($fila=mysqli_fetch_array($datos)) {
         ?>

        <section class="recuadro">
          <img src="<?php echo $fila['nombrefoto'] ?>" height="200" width=auto alt="">
        </section>

      <?php } ?>

    </section>


  </body>
</html>
