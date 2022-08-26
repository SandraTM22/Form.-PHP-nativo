<?php include 'conexion.php';
$correcto = true;
$dni = $_POST['dni'];
if ($dni==""){
    echo "<script>alert('El campo DNI esta vacio')</script>";
    echo "<script>location.href='formulario.php'</script>";
    $correcto=false;
}
$nombre = $_POST['nombre'];
if ($nombre==""){
    echo "<script>alert('El campo nombre esta vacio')</script>";
    echo "<script>location.href='formulario.php'</script>";
    $correcto=false;
}
$apellido1 = $_POST['apellido1'];
if ($apellido1==""){
    echo "<script>alert('El campo Primer apellido esta vacio')</script>";
    echo "<script>location.href='formulario.php'</script>";
    $correcto=false;
}
$apellido2 = $_POST['apellido2'];
if ($apellido2==""){
    echo "<script>alert('El campo Segundo apellido esta vacio')</script>";
    echo "<script>location.href='formulario.php'</script>";
    $correcto=false;
}

if(!empty($_POST['telefono'])){
    $telefono = $_POST['telefono'];
}else{
    $telefono = 'null';
}
$direccion = $_POST['direccion'];
if ($direccion==""){
    echo "<script>alert('El campo Segundo apellido esta vacio')</script>";
    echo "<script>location.href='formulario.php'</script>";
    $correcto=false;
}

if($correcto){
    $ins = "INSERT INTO alumnos VALUES ('','$dni','$nombre','$apellido1','$apellido2',$telefono,'$direccion')";
    $cons = mysqli_query($conex,$ins);
    if ($cons) {
        echo "<script>alert('Alumno guardado con exito');
         location.href='formulario.php';</script>";
       
    }else{
        echo "<script>alert('Error al guardar el alumno')
        location.href='formulario.php'</script>";
    }
}
// mysqli_free_result($cons);
include 'closeConex.php'


?>