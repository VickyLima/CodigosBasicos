<?php 
$conexion=mysqli_connect('localhost','root','','estados');
$continente=$_POST['continente'];

	$sql="SELECT idMunicipio,
			 nombreMunicipio
		from municipio 
		where idMunicipio='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Selecciona un municipio</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
	

?>