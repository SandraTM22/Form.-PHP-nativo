<?php
$servidor='localhost';
$usuario = 'root';
$clave = '';
$DB = 'registro';
$conex=mysqli_connect($servidor,$usuario,$clave,$DB);


if($conex){
    echo "<script>console.log('Exito en la conexión con la base de datos ".$DB."')</script>";
    echo "<script>console.log('".mysqli_GET_host_info($conex)."')</script>";
}else{
    echo "<script>console.log('Error en la conexión con la base de datos ".$DB."')</script>";
    echo "<script>console.log('Error número ".mysqli_connect_errno()."')</script>";
}
?>