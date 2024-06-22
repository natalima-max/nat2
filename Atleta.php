<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Média</title>
</head>
<body>

	<form method="post" action="">
		<label>Digite o seu ano de nascimento</label><br>
		<input type="number" name="txtano"><br>
		<input type="submit" name="idadeCalcular" value="Calcular">
	</form>

		<?php

		$anonas = $_POST["txtano"]; 
		$idade = 2024 - $anonas;

		echo "A categoria do atleta é:<br>";
		
		if ($idade >= 6 && $idade <= 7) 
			{
				echo "Atleta sub 7";
			}

    	else if ($idade >= 8 && $idade <= 9) 
			{
				echo "Atleta sub 9";
			}
		else if ($idade >= 10 && $idade <= 11) 
			{
				echo "Atleta sub 11";
			}
		else if ($idade >= 12 && $idade <= 13) 
			{
				echo "Atleta sub 13";
			}
		else if ($idade >= 14 && $idade <= 15) 
			{
				echo "Atleta sub 15";
			}
			else if ($idade >= 16 && $idade <= 17) 
			{
				echo "Atleta sub 17";
			}
			else if ($idade >= 18 && $idade <= 20) 
			{
				echo "Atleta sub 20";
			}
					
			
		?>



</body>
</html>