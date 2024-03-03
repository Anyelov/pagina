<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="contacto.css"> 
    <title>Desarrollo digital</title>
</head>
<body>
<header>
   <a href="index.html" class="a">
      <img src="Logo.png" class="logo">  </a>
      <p class ="nombre">Desarrollo digital</p>
     
<nav>   
<ul class ="navega">
  <li>  <a href="blog.php" class="nav-link">Blog</a>  </li>
  <li>  <a href="fIlosofia.html" class="nav-link">Filosofía</a>  </li>
  <li>  <a class="nav-link">Contacto</a>  </li>
  <li class="idioma">   Español  </li>

    </ul>
</nav>
</header>

<div class="flex">
 <div class="diseño">
    <h2 class="indica">Contacto</h2>
    <p class="indica2">Si deseas mas información o tienes alguna duda no esperes mas y te atenderemos a la brevedad aqui te dejo mi whatsapp.</p>
   



<div class="emisor"> 
<img class = "concat" src="Arturo.jpg">
<a href="#">
<img class = "concat2" src="whatsapp.png"></a>
<ul>
    <li>Arturo Sebastian Mercado Martínez</li>
    <li>---- ---- ---- ---- ----</li>
    <li>Contacto@asmagno.com</li>
</ul> 
</div>

</div>



<div class="conteiner"> 

    <form method="post" class="formulario">
       
    <p><label>Nombre  *</p><input class="nom" type="text" name="name" placeholder="Escribe tu nombre"></label>
   <p> <label>Telefono *</p><input class="nom" type="text" name="tele" placeholder="Escribe tu telefono"></label>
  <p> <label>Email *</p><input class="nom" type="email" name="correo" placeholder="Escribe tu Correo"></label>
 <p>  <label>Comentario *</p> <textarea class="com" name="coment" rows="4" cols="35" placeholder="Escribe tu comentario aquí"></textarea></label>
   <p> <input class="env"type="submit" name ="register"></p>
</form>

<!--<?php 
include("registrar.php");
?>     QUITAR LAS FLECHAS-->


</div>

</div>




</body>
</html>