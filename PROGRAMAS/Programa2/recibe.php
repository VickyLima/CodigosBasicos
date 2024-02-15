<!doctype html>
<html>
<head>
<body background="images.jpg">
<?php
    if (isset($_POST['estado'] ['municipio'])){
      $estadoSeleccionado = $_POST['estado'];
      echo "El Estado seleccionado es: ".$estados;
      echo "El Municipio seleccionado es: ".$municipios; 
  }else{
      echo "El Estado seleccionado es: ----";
      echo "El Municipio seleccionado es: ----";
  }
   ?>
   <br><br><a href="index.php"><button><img src="regresar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
      Regresar</button></a>
   </body>
</head>
    </html>