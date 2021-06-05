<?php

$dbname="p3t1_18100245";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (mysqli_connect_errno()) {
    echo "Intento fallido de conexion a MySQL: " .mysqli_connect_error();
    exit();
  }

 /* $dbname="P3T1_18100245";
  $dbuser="root";
  $dbpass="";

  try{
    $conexion=new PDO(
      'mysql:host=localhost;
      dbname='.$dbname,
      $dbuser,
      $dbpass
    );
  }
  catch (Exception $e){
    echo "Error de conexion".$e->getMessage();
  }*/


/*if(!$conexion){
  die("No hay conexion: " .mysqli_connect_error());
}*/
?>