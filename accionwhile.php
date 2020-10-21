<?php

	$valor=htmlspecialchars($_POST['cantidad']);

	$i=0;
	while ($i <= $valor) {
	    echo $i++; 
	    echo '<br>';


	     /* el valor presentado sería
	                   $i antes del incremento
	                   (post-incremento) */
	}
	print ('<br /><a href="while.php">Volver</a>');


?>