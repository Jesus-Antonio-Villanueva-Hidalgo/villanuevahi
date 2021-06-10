<?php
    include ("conexion.php");

    session_start();

    $usuario=$_POST['Usuario'];
    $contraseña=$_POST['Contraseña'];

    /*$_SESSION['Usuario']=$usuario;*/

    $md5_hash=md5($contraseña);

    $sql="select * from usuario where usuario='$usuario' AND contraseña='$md5_hash'";
    /*$query=mysqli_query($conexion,$sql);*/
    $resultado=$conexion->query($sql);

    /*$filas=mysqli_num_rows($resultado);*/
    $filas=$resultado->num_rows;

    if($filas>0)
    {
        $_SESSION['Usuario']=$usuario;
        header("location: index.php");
    }else
    {
        ?>
        <?php
            /*include ("login.php");*/
            header("location: login.html");
        ?>
        <h1 class="bad">NO SE ENCONTRÓ  AL USUARIO</h1>
        <?php
        session_unset();
        
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    /*$fila=$resultado->fetch_assoc();

    if($fila['Usuario']==$usuario && $fila['Contraseña']==$contraseña)
    {
        $_SESSION['Usuario']=$usuario;
        header("location: index.php");
    }
    else
    {
        header("location: login.php");
    }*/

?>
