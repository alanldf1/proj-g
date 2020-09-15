<?php
	include_once('connection.php');

	$email 	= $_POST['email'];
	$nome 	= $_POST['name'];

	$cadastro_usuario = "INSERT INTO usuario (email, nome) VALUES ('$email', '$nome')";

	$result_cadastro_usuario = mysqli_query($con, $cadastro_usuario);
?>