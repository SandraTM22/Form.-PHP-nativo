<?php
include 'conexion.php';

// Con request se puede coger con el metodo POST Y GET
$id=$_REQUEST['id']; 

$sel = "SELECT * FROM alumnos WHERE id='$id'";
$cons = mysqli_query($conex,$sel);
$registro = mysqli_fetch_assoc($cons);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro</title>
    <style>
        <?php include 'tabla.css' ?>
    </style>
</head>
<body>
    <h2>Formulario para actualizar datos del registro</h2>
    <form class="ob_datos" action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <table>
        <tr>
                <td><label for="dni">Dni</label></td>
                <td><input type="text" name="dni" value="<?php echo $registro['dni']?>"><br></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" name="nombre" value="<?php echo $registro['nombre']?>"><br></td>
            </tr>
            <tr>
                <td><label for="apellido1">Primer apellido</label></td>
                <td><input type="text" name="apellido1" value="<?php echo $registro['apellido1']?>"><br></td>
            </tr>
            <tr>
                <td><label for="apellido2">Segundo apellido</label></td>
                <td><input type="text" name="apellido2" value="<?php echo $registro['apellido2']?>"><br></td>
            </tr>
            <tr>
                <td><label for="telefono">Teléfono</label></td>
                <td><input type="text" name="telefono" value="<?php echo $registro['telefono']?>"><br></td>
            </tr>
            <tr>
                <td> <label for="direccion">Dirección</label></td>
                <td><input type="text" name="direccion" value="<?php echo $registro['direccion']?>"><br></td>
            </tr>
        </table>

        <br><input type="submit" value="Actualizar">    
    </form>
<?php
mysqli_free_result($cons);
include 'closeConex.php'; ?>
</body>
</html>