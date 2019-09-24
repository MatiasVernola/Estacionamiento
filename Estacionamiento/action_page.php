<?php
$MiObjeto= new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->contraseña=$_GET['contraseña'];
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?> 