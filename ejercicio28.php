<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{
      
    $conexion=new PDO("mysql:host=$servidor;dbname=album_1034278872", $usuario,$contrasenia );
    $conexion->setAttribute( PDO ::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql="INSERT INTO `fotos_1034278872` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg\r\n')";

      $conexion->exec($sql);

    echo "conexión establecida";

}catch(PDOException $error){
  echo"conexión erronoea".$error;
}


?>