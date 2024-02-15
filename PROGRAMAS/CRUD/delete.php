<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM marcas  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }

end;
?>
    <script type="text/javascript">
    $(".confirm").click(function(e) {
      e.preventDefault();
      var linkURL = $(this).attr("href");
      warnBeforeRedirect(linkURL);
    });

    function warnBeforeRedirect(linkURL) {
      swal({
        title: "¿Estas seguro<?php get_Genero($_SESSION['CBSGenero']); ?>?",
        text: "Una vez borrado el registro, no podrá ser recuperado.",
        type: "warning",
        showCancelButton: true,
      }).then(function(result) {
        console.log(result);
        if (result.value) {
           window.location.href = "producto.php";
        }
      });
    }
    </script>
?>