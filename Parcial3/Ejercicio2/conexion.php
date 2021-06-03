<?php
    $nombrehost='localhost';
    $nombreBD='user_18100245';
    $usuario='root';
    $contraseña='';

    try {
        $bd = new PDO("mysql:host=$nombrehost;dbname=$nombreBD",$usuario,$contraseña);
  } catch(PDOException $e) {
        echo "Error de conexion a la base de datos: ";
        echo $e->getMessage();
        exit();
  }
  $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
/*Me da un error al intentar abrirlo desde el localhost:
Error de conexion a la base de datosSQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: NO)*/
?>
