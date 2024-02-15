</style>
	</head>
	<body>

    <div id="estados">

<label> <select name="" class="form-control">

<?php
include 'conexion.php';

$consulta="SELECT * FROM estados";
$ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));


?>
		<div id="header">
			<ul class="nav">
				<li><a href=""><?php foreach ($ejecutar as $opciones): ?>
        - SELECCIONE UN ESTADO-
        <option value="<?php echo $opciones['Estado']?>"><?php echo $opciones['Estado']?></option>

        <?php endforeach ?></a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>
	</body>
</html>