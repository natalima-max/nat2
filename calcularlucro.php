<?php

$custo = $_POST['custo'];
$preco = $_POST['preco'];
$qtd = $_POST['quantidade'];
$lucro = ($preco * $qtd) - ($custo * $qtd);
$receita = ($preco * $qtd);

echo "<br>A receita total é $receita e o lucro líquido total é $lucro";




?>