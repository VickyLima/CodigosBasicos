<!doctype html>
<html>
<head>
<body background="fon.webp"></body>

   <?php
   if (isset($_POST['estado'])){
      $opcion = $_POST['estado'];
      echo 'El estado solicitado es: '.$opcion;
   }else{
      echo "El estado seleccionado es:....";
   }

   ?>
   <br><br><a href="programa2.php"><button><img src="regresar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
      Regresar</button></a>
</head>
    </html>