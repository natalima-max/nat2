<<?php 


$notasm = ($_POST['nt1'] + $_POST['nt2'] + $_POST['nt3'] + $_POST['nt4'] + $_POST['nt5'])/5;
$notaprova = $_POST['ntp'];
$mediafinal= $notasm + $notaprova;

	echo "<br> A nota final é $mediafinal ";



?>