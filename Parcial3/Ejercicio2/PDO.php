<?php

include ("conexion.php");

try {
    $sql = "select nombre,apellido_paterno,apellido_materno,correo,contraseña from user_18100245";
    $consulta = $bd -> prepare($sql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    print"<h2>PDO: Array Asociativo</h2>";
    print "<br>";
    var_dump($resultado);/*Devuelve información acerca del tipo y los valores almacenados*/
    print "<br>";
    printf("<b>nombre    = </b> %s <br>",$resultado['nombre']);
    printf("<b>apellido_paterno = </b> %s <br>",$resultado['apellido_paterno']);
    printf("<b>apellido_materno = </b> %s <br>",$resultado['apellido_materno']);
    printf("<b>correo     = </b> %s <br>",$resultado['correo']);
    printf("<b>contraseña     = </b> %s <br>",$resultado['contraseña']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
/*Me da un error al intetar abrirlo desde el localhost:
Error de conexion a la base de datosSQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)*/
?>