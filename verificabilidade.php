<?php
     $idade = $_POST['txtIdade'];

     if ($idade < 18)
     	{
			echo "Você é de menor meu patrão, não fume nem use drogas.";
		}
	else
		{
			echo "Você é de maior meu patrão, trabalhe muito e tema a Deus.";
          }
?>