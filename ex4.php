<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escolha sua condição de pagamento abaixo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Escolha sua condição de pagamento abaixo</h1>
	<?php include_once 'menu.php';  ?>

	<form id="form" action="ex4.php" method="post">
	
<label for="numero">Escolha sua condição de pagamento abaixo:</label> 

		<br>
		<select name="numero" id= "numero" required="true">
			<option value= "1">à vista em dinheiro ou cheque, recebe 10% de desconto</option>;
			<option value= "2">à vista no cartão de crédito, recebe 5% de desconto</option>;
			<option value= "3">em 2 vezes, preço da etiqueta sem juros</option>;
			<option value= "4">em 3 vezes, preço da etiqueta mais juros de 10%</option>;

		</select> 
<br>
<br>

		<label for="altura">Informe o valor da etiqueta:</label><br>
		<input type="number" name= "valor" id="valor" required="true" step="0.01" min="0">

<p>
	<button type= "submit" name="enviar"> Consultar </button>
	<button type="reset" name="limpar"> Limpar </button>

</p>

</form>

		<?php 

		if (isset($_POST['enviar'])) {
		
		$numero = $_POST['numero'];
		$valor = $_POST['valor'];

		if ($numero == '1')
		{
			$resultado = ($valor * 0.90);
		}
		if ($numero == '2')
		{
			$resultado = ($valor * 0.95);
		}

		if ($numero == '3')
		{
			$resultado = $valor;
		}

		if ($numero == '4')
		{
			$resultado = ($valor * 1.10);
		}

		echo "Valor total da compra é $resultado";

		}
		 ?>
		

</body>
</html>