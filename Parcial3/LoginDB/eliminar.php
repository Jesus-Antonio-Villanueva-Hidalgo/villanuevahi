<?php
include ("conexion.php");

if(isset($_GET['id_usuario']))
{
    $id=$_GET['id_usuario'];
    $consulta="DELETE FROM usuario WHERE id_usuario=$id";
    $resultado=mysqli_query($conexion,$consulta);
    if(!$resultado)
    {
        die('La consulta falló').$conexion->error;
    }
    header("location: index.php");
}
?>