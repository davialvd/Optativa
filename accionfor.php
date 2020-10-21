<?php

	$cantidad=htmlspecialchars($_POST['cantidad']);

/* ejemplo 1 */

		for ($i = 1; $i <= 10; $i++) {
		    echo  $cantidad."*".$i."=".$cantidad*$i."<br>";
		}

		print ('<br /><a href="forphp.php">Volver</a>');


?>