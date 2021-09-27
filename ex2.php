<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Equação 2 Grau</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Equação 2 Grau</h1>
	<?php include_once 'menu.php';  ?>

	<form id="form" action="ex2.php" method="post">

		<br><label for="a">Informe A:</label><br>
		<input type="number" name= "a" id="a" required="true">

		<br><label for="b">Informe B:</label><br>
		<input type="number" name= "b" id="b" required="true">

		<br><label for="c">Informe C:</label><br>
		<input type="number" name= "c" id="c" required="true">
		
	
		<p>
		<button type= "submit" name="enviar"> Consultar </button>
		<button type="reset" name="limpar"> Limpar </button>
		</p>

		<?php

		if (isset ($_POST['enviar'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$delta = $b * $b - 4 * $a * $c;	
		$x1	= (-$b + sqrt($delta)) / (2 * $a);
		$x2 = (-$b - sqrt($delta)) / (2 * $a);
		$resultadox1 = $x1;
		$resultadox2 = $x2;

		echo "Seu resultado é $resultadox1<br>";
		echo "Seu resultado é $resultadox2<br>";
		}

		 ?>

</body>
</html>