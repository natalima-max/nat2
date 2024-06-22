<?php

$L1 = $_POST['lado1'];
$L2 = $_POST['lado2'];
$L3 = $_POST['lado3'];



if (($L1 == $L2) and ($L2 == $L3)){
	echo "O triângulo é equilátero.";
	echo '<img src="triangulo equilatero.jpg" alt="Triângulo Equilátero">';
}

else if (($L1 != $L2) and ($L2 != $L3) and ($L1!=$L3) and ($L3!=$L2)and ($L1 < $L2 + $L3) and ($L2< $L1 + $L3) and ($L3 < $L1 + $L2)){
	echo "O triângulo é escaleno.";
	echo '<img src="trianguloescaleno.webp" alt="Triângulo Escaleno">';
}

else if(($L1 ==$L2) and ($L2!= $L3) and ($L1 < ($L2 + $L3))and ($L2< ($L1 + $L3)) and ($L3 < ($L1 + $L2)) or ($L1==$L3) and ($L2!=$L3)and ($L1 < ($L2 + $L3))and ($L2< ($L1 + $L3)) and ($L3 < ($L1 + $L2))) {
	echo "O triângulo é isósceles.";
	echo '<img src="isosceles.jpg" alt="Triângulo Isósceles">';

}
else{

	echo "Não é um triângulo.";
}





?>
<br>
<br><a href="Calculadoratriangulos.html">Voltar</a>