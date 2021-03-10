<?php
	$archivo = $_GET['archivo'];
	$funcion = $_GET['funcion'];

	switch($funcion):
		case "eliminar":
			If (unlink($archivo)) {
				echo "¡ARCHIVO ELIMINADO!";
			  } else {
				echo "¡ERROR AL ELIMINAR EL ARCHIVO!";
			}
			echo "<br><br>";
			echo "Serás redireccionado en 5 segundos.";
			header("refresh:5;url=index.php"); 
			break;
	endswitch;
?>