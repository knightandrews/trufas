<?php

	$destino ="andresvakero@gmail.com";
	
	$nombre=$_POST["name"];
	$apellido=$_POST["lastname"];
	$correo=$_POST["email"];
	$numero=$_POST["phone"];
	
	$contenido= "Nombre: " . $nombre . "\n" .
				"Apellido: " . $apellido . "\n" .
				"Correo: " . $correo . "\n" .
				"Teléfono: " . $numero . "\n";
				
	mail($destino, "Contacto",$contenido);
?>