<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Triângulo</title>
</head>
<body>

	<form method="post" action="CalculoTriangulo.php">
		
		<label>Digite o 1° número:</label><br>
        <input type="text" name="txtNum1" id="txtNum1" required> <br>
        <br>
        <label>Digite o 2° número:</label><br>
        <input type="text" name="txtNum2" id="txtNum2" required> <br>
        <br>
        <label>Digite o 3° número:</label><br>
        <input type="text" name="txtNum3" id="txtNum3" required> <br>
        <br>
        <input type="submit" name="btncalcular" id="btncalcular" value="Calcular">

	</form>
	<br>
	<a href="index.php">Voltar</a>


</body>
</html>