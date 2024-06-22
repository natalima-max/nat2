<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de preço de produto</title>
</head>
<body>
	<h1>Calculadora de preço</h1>
	
	<form method="post" action="calculopreco.php">
		
		<label for="nt1">Digite o valor do produto:</label><br>
		<input type="number" name="v1" step="0.01" required><br>
		<input type="submit" value="Calcule o valor total" value="Calcular">
