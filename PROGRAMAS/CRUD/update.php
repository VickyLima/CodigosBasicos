<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$marcas=$_POST['marcas'];
$color=$_POST['color'];
$carroceria=$_POST['carroceria'];

$sql="UPDATE marcas SET  id='$id',marcas='$marcas',color='$color',carroceria='$carroceria' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>