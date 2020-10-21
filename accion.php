<?php

	$opcion=htmlspecialchars($_POST['opcion']);
	$numerouno= htmlspecialchars($_POST['numerouno']);
	$numerodos= htmlspecialchars($_POST['numerodos']);
		
	if ($opcion==1) {

		$resultado=$numerouno+$numerodos;

		print $resultado;
		print ('<br /><a href="if_else.php">Volver</a>');
	}

	if ($opcion==2) {

		$resultado=$numerouno-$numerodos;

		print $resultado;
		print ('<br /><a href="if_else.php">Volver</a>');
	}

	if ($opcion==3) {

		$resultado=$numerouno*$numerodos;

		print $resultado;
		print ('<br /><a href="if_else.php">Volver</a>');
	}
	if ($opcion==4) {
		$resultado=$numerouno/$numerodos;

		print $resultado;
		print ('<br /><a href="if_else.php">Volver</a>');
	}

?>
