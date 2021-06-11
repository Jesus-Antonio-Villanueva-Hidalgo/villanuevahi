<!DOCTYPE html>
<?php 

    session_start();
    if ( !isset($_SESSION['Usuario']) || empty($_SESSION['Usuario']) ) 
    {
        header("Location: ./login.php");
    }else
    {
        $usuario=$_SESSION['Usuario'];
    }
    
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
        <div class="cab1">
            <h1>Bienvenid@: <?php echo $usuario ?></h1><br>
        </div>
        <div class="cab2">
            <a href="logout.php" onclick="salir()">Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
    
    <div class="col-md-12 lista-usuarios">
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
                

                <td><a href="#" onclick="eliminar(<?php echo $filas['id_usuario'] ?>)"><i class="fas fa-trash-alt"></i></a></td>
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
        
        <form action="insertar.php" method="post" class="form">
            <div class="ingresar-usuario">
                <div class="input">
                    <span class="datos">Nombre: </span>
                    
                    <input type="text" name="txtNombre" class="input-field" required>
                </div>
                <div class="input">
                    <span class="datos">Apellido Paterno: </span>
                    
                    <input type="text" name="txtPaterno" class="input-field" required>
                </div>
                <div class="input">
                    <span class="datos">Apellido Materno: </span>
                    
                    <input type="text" name="txtMaterno" class="input-field" required>
                </div>
                <div class="input">
                    <span class="datos">Usuario: </span>
                   
                    <input type="text" name="txtUsuario" class="input-field" required>
                </div>
                <div class="input">
                    <span class="datos">Contraseña: </span>
                    
                    <input type="text" name="txtContraseña" class="input-field" required>
                </div>
                <div>
                    <input type="reset" name="" class="button">
                    <input type="submit" value="Ingresar Usuario" name="guardar" class="button" onclick="insert()">
                </div>
            </div>
        </form>
</div>
<script type="text/JavaScript">
function eliminar(id) {
  let borrar=confirm("¿Desea eliminar al usuario con ID: "+id+"?");
  if(borrar==true)
  {
      alert("¡Se elimino al usuario correctamente!");
      window.location.href="eliminar.php?id_usuario="+id;
  }
  else{
    alert("¡No se elimino al usuario!");
  }
}
</script>
<script type="text/JavaScript">
function insert() {
  alert("Usuario ingresado correctamente");
}
</script>

<script type="text/JavaScript">
        function salir() {
            alert("Se cerró la sesión sin ningun problema");
            window.location.href="logout.php";
        }
    </script>
</body>
</html>