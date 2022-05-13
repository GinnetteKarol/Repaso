<?php

$servidor="localhost";  // 127.0.0.1
$usuario="root";
$contrasenia="";

try {

    $conexion=new PDO("mysql:host=$servidor;dbname=album_1034278872", $usuario,$contrasenia );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   

     $sql="SELECT * FROM `fotos_1034278872`";
     
     
     /*$sql="INSERT INTO `fotos_1034278872` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg\r\n')";
     $conexion->exec($sql);*/

     $sentencia=$conexion->prepare($sql);
     $sentencia->execute();

     $resultado=$sentencia->fetchAll();

     //print_r($resultado);
     
     foreach($resultado as $foto){

        echo $foto['nombre']."<br/>";
     }

    echo "Conexion establecida";


} catch (PDOExpection $error) {
    echo "Conexion erronea".$error;

}


?>