<!DOCTYPE html>
<html lang= "pt-br">
<head>
	<meta charset="utf-8">
	<title>Informe abaixo os dados do operador e o raio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<h1>Informe abaixo os dados do operador e o raio</h1>

	<?php include_once 'menu.php'; ?> <br>

	<form id="form" action="ex5.php" method="post">


		<br><label for="operador">Informe o código do operador:</label><br>
		<input type="number" name= "operador" id="operador" required="true" min="0">


		<br><label for="raio">Informe o valor do raio:</label><br>
		<input type="number" name= "raio" id="raio" required="true" min="0">

		<p>
	<button type= "submit" name="enviar"> Consultar </button>
	<button type="reset" name="limpar"> Limpar </button>

		</p>

</form>

		<?php

		if (isset($_POST['enviar'])) {


		$operador = $_POST['operador'];
		$raio = $_POST['raio'];
		$pi = 3.14;


		echo "<h2> Resultado </h2>";

		if ($operador == '1')

			{
			$resultado = $pi * ($raio * $raio);
			}

		else if ($operador == '2')
		
			{
			$resultado = (2* $pi) * $raio;
			}

		else 
		
			{
			$resultado = 'Não é Possível Calcular';
			}


		echo "Valor: <b>$resultado</b> <br>";

		}	

	?>

</body>
</html>