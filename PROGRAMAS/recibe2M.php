<!doctype html>
<html>
<head>
<body background="images.jpg">
<?php
   if (isset($_POST['municipio'])){
      $opcion = $_POST['municipio'];
      echo 'El municipio solicitado es: '.$opcion;
   }else{
      echo "El municipio seleccionado es:....";
   }

   ?>
   <br><br><a href="programa2.php"><button><img src="regresar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
      Regresar</button></a>
   </body>
</head>
    </html>