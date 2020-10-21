		

	
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/css.css">

    <title>Estructuras de control PHP</title>
  </head>
  <body>
  	<header>
  				<nav class="navbar navbar-expand-lg navbar-primary bg-light">
				  <a class="navbar-brand" href="index.html">Inicio PHP</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="if_else.php">If-Else</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="switch.php">Switch</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="while.php">While</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="do-while.php">Do-While</a>
				      </li>
				     
				      <li class="nav-item">
				        <a class="nav-link" href="forphp.php">For</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="foreach.php">For Each</a>
				      </li>
				     
				    </ul>
				  </div>
				</nav>
    
  	</header>

  
  
  	<div class="caja">
  		<h3 class="titulo">ESTRUCTURAS FOR</h3>

  	<div class="principal">
  		<p class="parrafoinicial">
  		Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C.<br>La sintaxis de un bucle for es:<br>



		<div class="divimguno">
			<img class="imagenuno" src="img/for1.png">
		</div><br>
			
		<p>La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo del bucle.<br>En el comienzo de cada iteración, se evalúa expr2. Si se evalúa como TRUE, el bucle continúa y se ejecutan la/sy sentencia/s anidada/s. Si se evalúa como FALSE, finaliza la ejecución del bucle,al final de cada iteración, se evalúa (ejecuta) expr3.<br><br>Cada una de las expresiones puede estar vacía o contener múltiples expresiones separadas por comas. En expr2, todas las expresiones separadas por una coma son evaluadas, pero el resultado se toma de la última parte. Que expr2 esté vacía significa que el bucle debería ser corrido indefinidamente (PHP implícitamente lo considera como TRUE, como en C). Esto puede no ser tan inútil como se pudiera pensar, ya que muchas veces se debe terminar el bucle usando una sentencia condicional break en lugar de utilizar la expresión verdadera del for.</p><br>

		<h3>Ejemplo</h3>
		<p>En el siguiente ejemplo se ingresara un numero cualquiera y el ciclo for nos ayudara a crear la tabla de multiplicacion:</p>
		<form method="POST" action="accionfor.php">
		
		<label>Ingrese numero</label><br>
			<input type="text" id="cantidad" name="cantidad" size="2"><br><br>
			<button type="submit" class="btn btn-dark">Resultado</button>
		</form>

		<br>
		<p class="parrafoinicial">
				El codigo utilizado para crear el formulario HTML fue:
		</p>
			<img src="img/for2.png"><br><br>
			
		<p class="parrafoinicial">
				El codigo utilizado PHP para validar los datos fue:
		</p>
			<img src="img/for3.png">


			<br><br>
			<div align="center">
				
				<a href="if_else.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">IF-ELSE</a>
				<a href="switch.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">SWITCH</a>
				<a href="while.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">WHILE</a>
				<a href="do-while.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">DO-WHILE</a>
				<a href="forphp.php" class="btn btn-info btn-lg disabled" role="button" aria-disabled="true">FOR</a>
				<a href="foreach.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">FOREACH</a>
			
			</div>
			<br><br><br><br>
			<footer>
			<div class="footer">David Alvarado - Nicolas Blandon ®
  				<p> Universidad De San Buenaventura</p>
  				<p> Optativa WEB</p>

  			</div>
  			 </footer>

	  	</div>
	  	</div>
 	
  		

 	






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
 
</html>