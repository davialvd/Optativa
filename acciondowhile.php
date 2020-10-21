<?php

$valor=htmlspecialchars($_POST['cantidad']);
$x = 1;

do {
  echo "El numero es $x <br>";
  $x++;
} while ($x <= $valor);

print ('<br /><a href="do-while.php">Volver</a>');
?>