<?php
/* Ejemplo 1 de foreach: sólo el valor */

	$numerouno=htmlspecialchars($_POST['numerouno']);
	$numerodos=htmlspecialchars($_POST['numerodos']);
	$numerotres=htmlspecialchars($_POST['numerotres']);
	$numerocuatro=htmlspecialchars($_POST['numerocuatro']);



	$a = array($numerouno, $numerodos, $numerotres, $numerocuatro);

	foreach ($a as $v) {
	    echo "En el arreglo $v.\n".'<br>';
}
print ('<br /><a href="foreach.php">Volver</a>');