<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Média</title>
</head>
<body>

	<form method="post" action="">
		<label>Digite a primeira nota</label><br>
		<input type="text" name="txtNota1"><br>

		<label>Digite a segunda nota</label><br>
		<input type="text" name="txtNota2"><br>

		<input type="submit" name="btnCalcular">
	</form>

	<?php

		$Nota1 = $_POST['txtNota1'];
		$Nota2 = $_POST['txtNota2'];


		$Media = ($Nota1 + $Nota2) / 2 ;


		echo "A média das notas é: $Media<br>";
		
		/*if ($Media >= 6 ) 
			{
				echo"Aluno aprovado";
			}
		else if ($Media < 4) 
			{
				echo "Aluno reprovado";
			}
		else
			{
				echo "Aluno em recuperação";
			}*/

			if ($Media < 4) 
				{
					echo "Aluno reprovado";
				}
			else if ($Media >= 4 && $Media < 6) 
				{
					echo "Aluno em recuperação";
				}
			else  
				{
					echo "Aluno aprovado";
				}
			

	?>

</body>
</html>