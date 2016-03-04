<?php
	$destino="congresomac@gmail.com";
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$mensaje=$_POST["mensaje"];
	$contenido="nombre: ". $nombre. "\n correo: ".$correo. "\n mensaje: " .$mensaje;
	mail($destino, "contacto del congreso",$contenido);
	header("location:gracias.html");