<?php

$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];
$consumomedio = $consumo / $distancia;
$consumomedio= number_format($consumomedio, 2, '.', '');




echo "<br>O consumo médio por KM é $consumomedio";




?>