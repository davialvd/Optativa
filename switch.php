		

	
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
  		<h3 class="titulo">ESTRUCTURAS SWITCH</h3>

  	<div class="principal">
  		<p class="parrafoinicial">
  		La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.



		<div class="divimguno">
			<img class="imagenuno" src="img/switch1.png">
		</div><br>


		
			
			

			<p class="parrafoinicial">
				Es importante entender cómo la sentencia switch es ejecutada con el fin de evitar errores. La sentencia switch ejecuta línea por línea (en realidad, sentencia por sentencia). Al principio, ningún código es ejecutado. Solo cuando se encuentra una sentencia case cuya expresión se evalúa a un valor que coincida con el valor de la con un valor que coincide con el valor de la expresión switch, PHP comienza a ejecutar la sentencias. PHP continúa ejecutando las sentencias hasta el final del bloque switch, o hasta la primera vez que vea una sentencia break. Si no se escribe una sentencia break al final de la lista de sentencias de un caso, PHP seguirá ejecutando las sentencias del caso siguiente.
			</p><br>

		<h3>Ejemplo</h3>
			
		<p>El siguiente ejemplo muestra la funcion de esta estructura al seleccionar un tipo de cerveza:</p>

		<form method="POST" action="esswitch.php">
		<label>Seleccione tipo cerveza</label>
		<select id="cerveza" name="cerveza">
			
			<option value="1">Heineken</option>
			<option value="2">Corona</option>
			<option value="3">Budweiser</option>
			<option value="4">Club Colombia</option>
		</select>
		<label>Cantidad</label>
			<input type="text" id="cantidad" name="cantidad" size="5"><br>
			<button type="submit" class="btn btn-dark">Resultado</button>
		</form>
		<br>
		<p class="parrafoinicial">
				El codigo utilizado para crear el formulario HTML fue:
		</p>
			<img src="img/formswitch.png"><br><br>
			
		<p class="parrafoinicial">
				El codigo utilizado PHP para validar los datos fue:
		</p>
			<img src="img/switch3.png">


			<br><br>
			<div align="center">
				
				<a href="if_else.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">IF-ELSE</a>
				<a href="switch.php" class="btn btn-info btn-lg disabled" role="button" aria-disabled="true">SWITCH</a>
				<a href="while.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">WHILE</a>
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