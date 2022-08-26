<?php
    include 'conexion.php';
    $id=$_REQUEST['id'];
    $borrar = "DELETE FROM alumnos WHERE id= '$id'";
    $cons = mysqli_query($conex,$borrar);

    if($cons){
        echo "<script> location.href='formulario.php' </script>";
    }else{
        echo "<script>alert('Error al eliminar el alumno')
        location.href='formulario.php'</script>";
    }
    mysqli_free_result($cons);
    include 'closeConex.php';
?>