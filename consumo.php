<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de consumo médio</title>
</head>
<body>
	<h1>Calculadora de consumo médio</h1>
	<form method="post" action="calculoconsumo.php">
		<label for="distância">Distância percorrida:</label><br>
		<input type="number" name="distancia" step="0.01" required><br>

		<label for="consumo">Consumo de gasolina total:</label><br>
		<input type="number" name="consumo" step="0.01" required><br>

        <input type="submit" value="Calcular consumo por KM">
		
