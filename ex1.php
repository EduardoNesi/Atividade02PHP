<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<meta charset="utf-8">
	<title>Calcule o seu peso ideal</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

	<h1>Calcule o seu peso ideal</h1>

	<?php include_once 'menu.php' ?>

<body>

	<form id="form" action="ex1.php" method="post">
	
<label for="sexo">Informe o Sexo:</label> 

		<br>
		<select name="sexo" id= "sexo" required="true">
			<option value= "1"> Masculino</option>;
			<option value= "2"> Feminino</option>;
		</select> 
<br>
<br>

		<label for="altura">Informe a Altura (metros):</label><br>
		<input type="number" name= "altura" id="altura" required="true" step="0.01" min="0">

<p>
	<button type= "submit" name="enviar"> Consultar </button>
	<button type="reset" name="limpar"> Limpar </button>

</p>

</form>
</body>
</html>


<?php

if (isset($_POST['enviar'])) 

{
	

	$sexo = $_POST['sexo'];
	$altura = $_POST['altura'];
	$valorhomem = 72.7;
	$valormulher = 62.1;
	$desconthomem = 58.0;
	$descontmulher = 44.7;


		echo "<h2> Resultado </h2>";

		if ($sexo == '1')
		{	
		($resultado = ($valorhomem * $altura) - $desconthomem);

		}

		if ($sexo == '2')
		
		{
			($resultado = ($valormulher * $altura) - $descontmulher);
		}


		echo "Seu resultado é $resultado";

		}
?>

</body>
</html>