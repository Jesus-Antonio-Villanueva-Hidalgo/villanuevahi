<?php

    $cadena='{ "Num_Control": "18100245", "nombre": "Jesus Villanueva", "direccion": "Fenix 810",
    "telefono": "8677556699", "materias_aprobadas": [["Fundamentos de programacion","Calculo diferencial","Taller de etica"],
    ["POO","Algebra Lineal","Quimica"]] }';

    print "<h2>Cadena Json</h2>";
    print "<br>";
    print "$cadena";

    print "<br><br><h2>Aplicando json_decode para obtener un array asociativo</h2>";
    $info = json_decode($cadena,true);
    var_dump($info);

    print "<h4>Imprimiendo Array Asociativo:</h4>";
    print "Num. Control: ";
    echo $info['Num_Control'].'<br>';
    print "Nombre: ";
    echo $info['nombre'].'<br>';
    print "Direccion: ";
    echo $info['direccion'].'<br>';
    print "Celular: ";
    echo $info['telefono'].'<br>';
    print "<h4>Lista de materias aprobadas</h4>";
    echo $info['materias_aprobadas'][0][0].'<br>';
    echo $info['materias_aprobadas'][0][1].'<br>';
    echo $info['materias_aprobadas'][0][2].'<br>';
    echo $info['materias_aprobadas'][1][0].'<br>';
    echo $info['materias_aprobadas'][1][1].'<br>';
    echo $info['materias_aprobadas'][1][2].'<br>';

    /*Modificaciones*/
    $info['direccion']="Venezuela 1580. Colonia Militar";
    $info['materias_aprobadas'][2][0]="Estructura de datos";
    $info['materias_aprobadas'][2][1]="Fisica";
    $info['materias_aprobadas'][2][2]="Contabilidad";

    print "<h3>Aplicando json_encode()</h3>";
    $cadenaJson=json_encode($info);
    /*var_dump($cadenaJson);*/
    print $cadenaJson;

?>