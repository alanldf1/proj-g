<?php

	$con = mysqli_connect('localhost', 'root', '', 'shopmee');

	//verificação de conexão
	if (mysqli_connect_errno()) {
		
		echo "A conexão falhou: " . mysqli_connect_error();

	} else {

		echo "";
	}
?>