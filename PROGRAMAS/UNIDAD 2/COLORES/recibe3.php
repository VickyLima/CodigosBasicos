</form><br>
<body background="images.jpg">
<?php
     
    if (isset($_POST['colores'])){
        $colorSeleccionado = $_POST['colores'];
        echo "El color seleccionado fue: ".$colorSeleccionado; 
    }else{
       echo "El color seleccionado fue: ----"; 
    }
?>