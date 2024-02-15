<!DOCTYPE html>
<html>
    <head>
    <form method="POST" action="recibe2M.php">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Municipios</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <body background="images.jpg">
</body>
</head>
<body>

     <div id="muicipio">

     <form method="POST" action="recibe2.php">
     <div id="estados">
     <h1 class="lines-effect">Lista de Estados</h1>
 <br>

     <label> <select name="municipio">

     <?php
     include 'conexion.php';
     ?>

     <div alig="center">                       
  
        <option value="0">Selecciona tu municipio:</option>

        <?php

     $consulta="SELECT * FROM municipio";
     $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));


     ?>

     <?php foreach ($ejecutar as $opciones): ?>
        <option value="<?php echo $opciones['municipio']?>"><?php echo $opciones['municipio']?></option>

        <?php endforeach ?>

     </select>
     </select>
  
      <button>Enviar</button>
  
    </p>
</label>

     </div>
     </body>
     </html>

