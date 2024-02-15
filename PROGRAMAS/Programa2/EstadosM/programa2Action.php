<?php
$nombre=$_POST["estados"];
$nombre2=$_POST["municipios"];

$conexion=mysqli_connect("localhost","root","","estadosymunicipios");
        $consulta="SELECT nombre FROM estados where id='$nombre'";
        $resultado=mysqli_query($conexion,$consulta);
		$consulta2="SELECT nombre FROM municipios where id='$nombre2'";
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
                    $nombre=$filas["nombre"];
                    echo $nombre;
                endwhile;
			?>
	</font> </B>
    <ol>
		<B><font COLOR="black"> 
		El municipio que elegiste es:
			<?php while ($filas=$resultado2->fetch_assoc()):
                    $nombre=$filas["nombre"];
                    echo "<option>$nombre</option>";
                endwhile;
			?>
	</font> </B>