<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $db="crudmarca";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$db);

    return $con;
}
?>
