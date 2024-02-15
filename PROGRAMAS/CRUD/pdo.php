<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="prod" href="producto.php">
<title>Llenar select HTML con MySQL PHP: Ejemplos - BaulPHP</title>

<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>
<?php
$query = $db->prepare("SELECT * FROM marcas");
$query->execute();
$data = $query->fetchAll();

foreach ($data as $valores):
    echo '<option value="'.$valores["id"].'">'.$valores["marcas"].'</option>';
    endforeach;
?>
<body>
<header> 