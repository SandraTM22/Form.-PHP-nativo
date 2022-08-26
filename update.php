<?php
    include 'conexion.php';

$correcto = true;

$id=$_POST['id'];

if (empty($_POST['dni'])){
    echo "<script>alert('El campo Dni esta vacio')</script>";
    echo "<script>location.href='actualizar.php?id=".$id."'</script>";
    $correcto=false;
}else{
    $dni = $_POST['dni'];
}

if (empty($_POST['nombre'])){
    echo "<script>alert('El campo nombre esta vacio')</script>";
    echo "<script>location.href='actualizar.php?id=".$id."'</script>";
    $correcto=false;
}else{
    $nombre = $_POST['nombre'];
}

if (empty($_POST['apellido1'])){
    echo "<script>alert('El campo Primer apellido esta vacio')</script>";
    echo "<script>location.href='actualizar.php?id=".$id."'</script>";
    $correcto=false;
}else{
    $apellido1 = $_POST['apellido1'];
}

if(empty($_POST['apellido2'])){
    echo "<script>alert('El campo Segundo apellido esta vacio')</script>";
    echo "<script>location.href='actualizar.php?id=".$id."'</script>";
    $correcto=false;
}else{
    $apellido2 = $_POST['apellido2'];
}

if (empty($_POST['telefono'])){
    $telefono = 'null';
}else{
    $telefono = $_POST['telefono'];
}

if(empty($_POST['direccion'])){
    echo "<script>alert('El campo Dirección esta vacio')</script>";
    echo "<script>location.href='actualizar.php?id=".$id."'</script>";
    $correcto=false;
}else{
    $direccion = $_POST['direccion'];
}


if($correcto){   
    $ins = "UPDATE alumnos SET dni='$dni',nombre='$nombre', apellido1='$apellido1',apellido2='$apellido2', telefono=$telefono, direccion='$direccion' WHERE id='$id'";
    $cons = mysqli_query($conex,$ins);

    if($cons){
        echo "<script>alert('Exito al guardar el alumno'); location.href='formulario.php'; </script>";
    }
    else{
        echo "<script>alert('Error al guardar el alumno');
        location.href='update.php';</script>";
    }
}else{
    echo "<script>console.log('Ha ocurrido un error')</script>";
}
// mysqli_free_result($cons);
include 'closeConex.php' 
?>