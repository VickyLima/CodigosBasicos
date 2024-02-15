<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$marcas=$_POST['marcas'];
$color=$_POST['color'];
$carroceria=$_POST['carroceria'];


$sql="INSERT INTO marcas VALUES('$id','$marcas','$color','$carroceria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>