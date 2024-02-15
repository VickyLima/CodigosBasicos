<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Estados</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <body background="fon.webp"></body>
</head>
<body>
<form method="POST" action="recibe2.php">
     <div id="estados">
     <h1 class="lines-effect">Lista de Estados</h1>
 <br>

     <label> <select name="estado">

     <?php
     include 'conexion.php';
     ?>

     
        <div style="width:900px; margin:0 auto; border:1px solid #FCC; padding: 10px;">
     <div alig="center">                       
</br>
        <option value="">Selecciona tu estado:</option>

        <?php

     $consulta="SELECT * FROM estados";
     $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

     ?>
<h1> Lista de Estados</h1>
     <?php foreach ($ejecutar as $opciones): ?>
        <option value="<?php echo $opciones['Estado']?>"><?php echo $opciones['Estado']?></option>

        <?php endforeach ?>

     </select>
     </select>
  
      <button>
      <img src="enviar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
      Enviar</button>
  
    </p>
</label>

     </div>
     </body>
     </html>

