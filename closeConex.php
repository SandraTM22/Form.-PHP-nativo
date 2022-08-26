<?php
$close=mysqli_close($conex);
if($close){
    echo "<script>console.log('se ha cerrado la sesión')</script>";
}else{
    echo "<script>console.log('No se ha podido cerrar la sesión')</script>";
}
?>