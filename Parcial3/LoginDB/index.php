<!DOCTYPE html>
<?php 

    session_start();
    $usuario=$_SESSION['Usuario'];
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="https://kit.fontawesome.com/786e796ddb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include ("conexion.php");

        $sql="select * from usuario";
        $resultado=mysqli_query($conexion,$sql);
    ?>
    <div class="cabezera">
        <div>
            <h1>Bienvenid@: <?php echo $usuario ?></h1><br>
        </div>
        <div>
            <a href="logout.php">Cerrar Sesion</a>
        </div>
    </div>
    
    <div class="col-md-12">
    <h1 id="list">Lista de Usuarios</h1>
    <table class="list-table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id_usuario']?></td>
                <td><?php echo $filas['nombre'] ?></td>
                <td><?php echo $filas['apellido_paterno'] ?></td>
                <td><?php echo $filas['apellido_materno'] ?></td>
                <td><?php echo $filas['usuario'] ?></td>
                <td><?php echo $filas['contraseña'] ?></td>
                <td><a href="editar.php?id_usuario=<?php echo $filas['id_usuario'] ?>"><i class="far fa-edit"></i></a></td>
                <td><a href="eliminar.php?id_usuario=<?php echo $filas['id_usuario'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </div>
   
    <?php
        mysqli_close($conexion);
    ?>

<div class="ingresar">
    <h2>Ingresar Usuario</h2>
        <form action="insertar.php" method="post">
            <table>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre" required></td>
                
                </tr>
                <tr>
                    <td>Apellido Paterno: </td>
                    <td><input type="text" name="txtPaterno" required></td>
                </tr>
                <tr>
                    <td>Apellido Materno: </td>
                    <td><input type="text" name="txtMaterno" required></td>
                </tr>
                <tr>
                    <td>Usuario: </td>
                    <td><input type="text" name="txtUsuario" required></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="password" name="txtContraseña" required></td>
                </tr>
                <tr>
                    <td><input type="reset" name=""></td>
                    <td><input type="submit" value="Ingresar Usuario" name="guardar"></td>
                </tr>
        </table>
</div>

</body>
</html>