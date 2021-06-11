<?php
    include ("conexion.php");

    if(isset($_GET['id_usuario']))
    {
        $id=$_GET['id_usuario'];
        $consulta="SELECT * FROM usuario WHERE id_usuario=$id";
        $resultado=mysqli_query($conexion,$consulta);
        if(mysqli_num_rows($resultado)==1)
        {
            $fila=mysqli_fetch_array($resultado);
            $id_usuario=$fila['id_usuario'];
            $nombre=$fila['nombre'];
            $paterno=$fila['apellido_paterno'];
            $materno=$fila['apellido_materno'];
            $usuario=$fila['usuario'];
        }
    }

    if(isset($_POST['actualizar']))
    {
        $id=$_GET['id_usuario'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['ApePaterno'];
        $materno=$_POST['ApeMaterno'];
        $usuario=$_POST['usuario'];
        $contraseña=md5($_POST['nueva_contraseña']);

        $consulta="UPDATE usuario SET nombre='$nombre',apellido_paterno='$paterno',apellido_materno='$materno',
        usuario='$usuario',contraseña='$contraseña' WHERE id_usuario=$id";
        $resultado=mysqli_query($conexion,$consulta);
        if($resultado){
            header ("location: index.php");
        }
        else{
            die('Consulta fallo'.$conexion->error);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editar.css">
    <title>EDITAR</title>
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="editar.php?id_usuario=<?php echo $_GET['id_usuario']; ?> " method="POST" id="edit">
                        <div class="edit-form">
                            <div class="form-group">
                                <span>ID</span>
                                <input type="text" name="id" readonly value="<?php echo $id_usuario ?>"
                                class="form-control" placeholder="ID">
                            </div>
                            <div class="form-group">
                                <span>Nombre</span>
                                <input type="text" name="nombre" value="<?php echo $nombre ?>"
                                class="form-control" placeholder="Nombre" required>
                            </div>
                        <div class="form-group">
                        <span>Apellido Paterno</span>
                        <input type="text" name="ApePaterno" value="<?php echo $paterno ?>"
                            class="form-control" placeholder="Apellido Paterno" required>
                        </div>
                        <div class="form-group">
                        <span>Apellido Materno</span>
                        <input type="text" name="ApeMaterno" value="<?php echo $materno ?>"
                            class="form-control" placeholder="Apellido Materno">
                        </div>
                        <div class="form-group">
                        <span>Usuario</span>
                        <input type="text" name="usuario" value="<?php echo $usuario ?>"
                            class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                        <span>Nueva Contraseña</span>
                        <input type="text" name="nueva_contraseña" value=""
                            class="form-control" placeholder="Nueva Contraseña" required>
                        </div>
                        <a href="index.php" >Volver</a>
                        <button class="btn btn-sucess" name="actualizar" id="btn-update" data-target=".bd-example-modal-lg" onclick=update()>Actualizar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/JavaScript">
        function update() {
            alert("Registro actualizado correctamente");
        }
    </script>
</body>
</html>
    