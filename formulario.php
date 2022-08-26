<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="tabla.css?v=<?php echo time(); ?>">      
</head>
<body>
    <h2>Registro de datos</h2>
    
    <form class="ob_datos" action="guardar.php" method="post">
        <table>
            <tr>
            <td>
                    <label for="dni">DNI</label>
                </td>
                <td>
                    <input type="number" name="dni" placeholder="dni..."><br>
                </td>
            </tr>
            <tr>                
                <td>
                    <label for="nombre">Nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" placeholder="nombre..."><br>
                </td>
            </tr> 
            <tr>
                <td>
                    <label for="apellido1">Primer apellido</label>
                    </td>
                    <td>
                    <input type="text" name="apellido1" placeholder="Primer apellido..."><br>
                </td>
            </tr> 
            <tr>
                <td>
                    <label for="apellido2">Segundo apellido</label>
                    </td>
                    <td>
                    <input type="text" name="apellido2" placeholder="Segundo apellido..."><br>
                </td>
            </tr> 
            <tr>
                <td>
                    <label for="telefono">Teléfono</label>
                    </td>
                    <td>
                    <input type="number" name="telefono" placeholder="Telefono..."><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="direccion">Dirección</label>
                    </td>
                    <td>
                    <input type="text" name="direccion" placeholder="Direccion..."><br>
                </td>
            </tr>               
        </table>   
        <br><input type="submit" value="Guardar" > 
    </form>

    <div id="mostrar" class="hidden">
        <table class="most_data ">
            <thead class="most_data_th">
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th hidden>Editar</th>
                    <th hidden>Borrar</th>
                </tr>
            </thead>
            <tbody class="most_data_td">
                <?php                 

                    $sel = 'SELECT * FROM alumnos';
                    $cons = mysqli_query($conex,$sel);

                    //Comprobamos si hay registros para mostrar o no la tabla
                    $num_registros = mysqli_num_rows($cons);
                    if(!$num_registros<=0){
                        echo "<script>document.getElementById('mostrar').classList.remove('hidden')</script>";
                    }

                    //mostramos los registros
                    while($registro=mysqli_fetch_assoc($cons)){
                ?>
                <tr>
                    <td><?php echo $registro['dni'] ?></td>
                    <td><?php echo $registro['nombre'] ?></td>
                    <td><?php echo $registro['apellido1'] ?></td>
                    <td><?php echo $registro['apellido2'] ?></td>
                    <td><?php echo $registro['telefono'] ?></td>
                    <td><?php echo $registro['direccion'] ?></td>
                    <td><a href="actualizar.php?id=<?php echo $registro['id'];?>">Editar</a></td>
                    <td><a href="borrar.php?id=<?php echo $registro['id'];?> ">Eliminar</a></td>
                </tr>
                <?php
                }
                mysqli_free_result($cons);
                ?>
            </tbody>
    </table>
    </div>
<?php include 'closeConex.php'  ?>
</body>
</html>