<?php

$preco = $_POST['v1'];
$juro = $_POST['v1'] * 0.16;
$total = $_POST['v1'] + $juro;
$parcela = $total / 12; 
$total = number_format($total, 2, '.', '');
$parcela = number_format($parcela, 2, '.', '');



echo "<br>O valor total a ser pago é $total e cada parcela é $parcela";




?>