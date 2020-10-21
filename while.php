		

	
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
  		<h3 class="titulo">ESTRUCTURAS WHILE</h3>

  	<div class="principal">
  		<p class="parrafoinicial">
  		El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como TRUE. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). A veces, si la expresión while se evalúa como FALSE desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez.<br><br>

		Al igual que con la sentencia if, se pueden agrupar varias instrucciones dentro del mismo bucle while rodeando un grupo de sentencias con corchetes, o utilizando la sintaxis alternativa:



		<div class="divimguno">
			<img class="imagenuno" src="img/while1.png">
		</div><br>


		<h3>Ejemplo</h3>
			
		<p>El siguiente ejemplo muestra la funcion cargando los numeros hasta el valor que se le indique</p>

		<form method="POST" action="accionwhile.php">
			
		<label>Valor al que quiere que llegue el ciclo</label><br>
			<input type="text" id="cantidad" name="cantidad" size="5"><br><br>
			<button type="submit" class="btn btn-dark">Resultado</button>
		</form>

		<br>
		<p class="parrafoinicial">
				El codigo utilizado para crear el formulario HTML fue:
		</p>
			<img src="img/while2.png"><br><br>
			
		<p class="parrafoinicial">
				El codigo utilizado PHP para validar los datos fue:
		</p>
			<img src="img/while3.png">


			<br><br>
			<div align="center">
				
				<a href="if_else.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">IF-ELSE</a>
				<a href="switch.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">SWITCH</a>
				<a href="while.php" class="btn btn-info btn-lg disabled" role="button" aria-disabled="true">WHILE</a>
				<a href="do-while.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">DO-WHILE</a>
				<a href="forphp.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">FOR</a>
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