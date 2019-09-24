<?php
$CheckearNombre=$_GET['nombre'];
$CheckearApellido=$_GET['apellido'];

$archivo=fopen('usuarios.txt', 'r');

    while(!feof($archivo)) 
    {
		$objeto=json_decode(fgets($archivo));

  		if ($CheckearNombre==$objeto->nombre && $CheckearApellido==$objeto->apellido)
  		{
  			echo "hola";
  		}
	 }
	fclose($archivo);

?> 