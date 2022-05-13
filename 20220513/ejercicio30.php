<?php
session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logueando";


echo "Sesion iniciando".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];



?>
