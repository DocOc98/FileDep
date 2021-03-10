<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Ingreso</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Mostrador de Documentos</h1>
			<table>
			</table>
			<?php 
				$directory='./files/';
				$files=scandir($directory);
				for ($i=0; $i < count($files); $i++):
					if(strchr($files[$i], ".") and strlen($files[$i])>2):
						$archivo = "./files/$files[$i]";
						echo "<a href='$archivo' target='_blanck'>".strchr($files[$i], ".", true)."</a>";
						echo " ---> ";
						echo "<a href='funciones.php?archivo=$archivo&funcion=eliminar' class='boton boton-eliminar'>ELIMINAR ARCHIVO</a>";
						echo "<br>";
			?>
			<?php
					endif;
				endfor;
			?>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>