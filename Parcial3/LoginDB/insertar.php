<?php
    include ("conexion.php");

    if(isset($_POST['guardar'])){
        $nombre=$_POST['txtNombre'];
        $paterno=$_POST['txtPaterno'];
        $materno=$_POST['txtMaterno'];
        $usuario=$_POST['txtUsuario'];
        $contraseña=md5($_POST['txtContraseña']);
        

        $sql="INSERT INTO usuario(nombre,apellido_paterno,apellido_materno,usuario,contraseña) 
        VALUES ('$nombre','$paterno','$materno','$usuario','$contraseña')";

        $resultado=mysqli_query($conexion,$sql);
        if(!$resultado){
            die('Consulta fallo'.$conexion->error);
        }
        header("location: index.php");
    }
?>