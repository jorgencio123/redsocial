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
        <img src="img\logo.jpg" alt="">
      </div>
      <nav class="menu">
        <ul>
          <li> <a href="index.html">inicio</a></li>
          <li><a href="miperfil.php">mi perfil</a></li>
          <li><a href="amigos.php">mis amigos</a></li>
          <li><a href="fotos.php">mis fotos</a></li>
          <li><a href="buscar.php">buscar amigos</a></li>
        </ul>

      </nav>
    </header>
    <section id="recuadros">
      <h2>mis amigos</h2>
      <section class="recuadro">
        <img src="img\gerald.jpg" alt="" height="150">
        <h2>personal</h2>
        <p class="parrafo">
          descripciondescripciondesciprcion
        </p>
        <a href="#">ver perfil</a>

      </section>
      <section class="recuadro">
        <img src="img\gerald.jpg" alt="" height="150">
        <h2>personal</h2>
        <p class="parrafo">
          descripciondescripciondesciprcion
        </p>
        <a href="#">ver perfil</a>

      </section>
      <section class="recuadro">
        <img src="img\gerald.jpg" alt="" height="150">
        <h2>personal</h2>
        <p class="parrafo">
          descripciondescripciondesciprcion
        </p>
        <a href="#">ver perfil</a>

      </section>
    </section>


  </body>
</html>
