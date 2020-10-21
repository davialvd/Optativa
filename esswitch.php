<?php

	$cerveza=htmlspecialchars($_POST['cerveza']);
	$cantidad=htmlspecialchars($_POST['cantidad']);

	switch($cerveza)
{
    case '1';
    	echo 'Buena Eleccion Seleccionaste '.$cantidad.' de Heineken';
    	echo ('<br /><a href="switch.php">Volver</a>');
    break;
    case '2';
    	echo 'Buena Eleccion Seleccionaste '.$cantidad.' de Corona';
    	echo ('<br /><a href="switch.php">Volver</a>');
    break;
    case '3';
        echo 'Buena Eleccion Seleccionaste '.$cantidad.' de Budweiser';
    	echo ('<br /><a href="switch.php">Volver</a>');
    break;
    case '4';
        echo 'Buena Eleccion Seleccionaste '.$cantidad.' de Club Colombia';
    	echo ('<br /><a href="switch.php">Volver</a>');
    break;
    default;
        echo 'Por favor haga una nueva selección...';
    break;
}



?>