<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Veja sua classificação abaixo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

		<h1>Veja sua classificação abaixo</h1>
		<?php include_once 'menu.php';  ?>


	<form id="form" action="ex3.php" method="post">
	
		<label for="idade">Informe sua idade:</label><br>
		<input type="number" name= "idade" id="idade" required="true" step="0.01" min="0">

		<p>
		<button type= "submit" name="enviar"> Consultar </button>
		<button type="reset" name="limpar"> Limpar </button>


		<?php
		if (isset($_POST['enviar'])) {

		$idade = $_POST['idade'];


		if ($idade >=0 && $idade <=4)
		 {
			$categoria = "Sem categoria";
		}

		elseif ($idade >=5 && $idade <=7) 
		{
			$categoria = "Infatil A";
		}

		elseif ($idade >=8 && $idade <=10)
		 {
			$categoria = "Infatil C";
		}

		elseif ($idade >=11 && $idade <=13)
		 {
			$categoria = "Juvenil A";
		}

		elseif ($idade >=14 && $idade <=17) {
			$categoria = "Juvenil B";
		}

		else   
		{
			$categoria = "Adulto";
		}
		
		echo "<br>Seu Resultado abaixo<br>";
		echo "<br>$categoria<br>";
		}
		 ?>
</body>
</html>