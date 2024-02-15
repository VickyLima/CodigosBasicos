<?php
$nombre=$_POST["Estados"];
$nombre2=$_POST["lista2"];

$conexion=mysqli_connect("localhost","root","","estados");
        $consulta="SELECT nombreEstado FROM estado where idEstado='$nombre'";
        $resultado=mysqli_query($conexion,$consulta);
		$consulta2="SELECT nombreMunicipio FROM municipio where idMunicipio='$nombre2'";
        $resultado2=mysqli_query($conexion,$consulta2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Información</title>
	<meta charset="UTF-8">
<ol>
		<B><font COLOR="black"> 
		El estado que elegiste es:
			<?php while ($filas=$resultado->fetch_assoc()):
                    $nombre=$filas["nombreEstado"];
                    echo $nombre;
                endwhile;
			?>
	</font> </B>
    <ol>
		<B><font COLOR="black"> 
		El municipio que elegiste es:
			<?php while ($filas=$resultado2->fetch_assoc()):
                    $nombre=$filas["nombreMunicipio"];
                    echo "<option>$nombre</option>";
                endwhile;
			?>
	</font> </B>