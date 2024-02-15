<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados y Mun</title>
    <link rel="stylesheet" href="estilosCSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","estados");
        $consulta="SELECT * FROM estado";
        $resultado=mysqli_query($conexion,$consulta);

    ?>
        <form action="programa2Action.php" method="post">
            <h1 class="animate__animated animate__backInLeft">Formulario Estado y Municipio</h1>
            <p>Elige un estado<select id="Estado" name="Estados"></p>
            <?php
                while ($filas=$resultado->fetch_assoc()):
                    $value=$filas["idEstado"];
                    $nombre=$filas["nombreEstado"];
                    echo "<option value='$value'>$nombre</option>";
                endwhile;
            ?>
            </select>
            <br>
			<div id="select2lista"></div>

            <input  type="submit" value="Ingresar">
        </form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#Estado').val();
		recargarLista();

		$('#Estado').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#Estado').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>