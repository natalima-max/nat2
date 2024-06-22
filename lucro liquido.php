<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de lucro liquido</title>
</head>
<body>
	<h1>Calculadora de Lucro Líquido</h1>
	<form method="post" action="calcularlucro.php">
		<label for="custo">Custo do produto:</label><br>
		<input type="number" name="custo" step="0.01" required><br>

		<label for="preço">Preço do produto:</label><br>
		<input type="number" name="preco" step="0.01" required><br>

        <label for="quantidade">Quantidade vendida:</label><br>
		<input type="number" name="quantidade" step="0.01" required><br>

		<input type="submit" value="Calcular Lucro Líquido">
		<input type="reset" value="Reiniciar">





</body>
</html>