		

	
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
  		<h3 class="titulo">ESTRUCTURAS IF-ELSE</h3>

  	<div class="principal">
  		<p class="parrafoinicial">
  		El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. Permite la ejecución condicional de fragmentos de código. PHP dispone de una estructura if que es similar a la de C:<br>

		if (expr)
		  sentencia<br>
		Como se describe en la sección sobre expresiones , la expresión es evaluada a su valor booleano. Si la expresión se evalúa como TRUE, PHP ejecutará la sentencia y si se evalúa como FALSE la ignorará. Más información sobre qué valores evalúan como FALSE se puede encontrar en la sección 'Convirtiendo a booleano'.<br>

		El siguiente ejemplo mostraría a es mayor que b si $a es mayor que $b:


		<div class="divimguno">
			<img class="imagenuno" src="img/imagenif.png">
		</div><br>
		<p class="parrafoinicial">Como ejemplo se realizara una calculadora con diferentes opciones, cada opcion es un if:</p>

		<form method="POST" action="accion.php">
		
			<select id="opcion" name="opcion">
				<option value="1">Suma</option>
				<option value="2">Resta</option>
				<option value="3">Multiplicacion</option>
				<option value="4">Division</option>
			</select>
			<br>
			<label>Primer Numero</label><br>
			<input type="text" size="5" name="numerouno" id="numerouno">  
			<br>
			<label>Segundo Numero</label><br>
			<input type="text" size="5" name="numerodos" id="numerodos"> <br> <br> 
			<button type="submit" class="btn btn-dark">Resultado</button>

		</form>
			
			

			<p class="parrafoinicial">
				El codigo utilizado para crear el formulario HTML fue:
			</p>

			
			<img src="img/form.png"><br><br>

			<p class="parrafoinicial">
				El codigo utilizado PHP para validar los datos fue:
			</p>
			<img src="img/imagenifphp.png">
			


			<br><br>
			<div align="center">
				
				<a href="if_else.php" class="btn btn-info btn-lg disabled"  role="button" aria-disabled="false">IF-ELSE</a>
				<a href="switch.php" class="btn btn-info btn-lg" role="button" aria-disabled="true">SWITCH</a>
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