<?php
	include_once('connection.php');

	 $select = mysqli_query($con, "SELECT * FROM usuario ");


 	while ($data = mysqli_fetch_array($select)) {

	 	$usuarioId		= $data['id'];
	 	$usuarioEmail	= $data['email'];
		$usuarioNome	= $data['nome'] ;

		echo "$usuarioId, $usuarioEmail, $usuarioNome<br>";

	 }

?>
<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<title>Dados dos usuario</title>
		<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
	</head>
	<body>

		<div class="row">

			<div class="container">

				<div class="m-5">

					<h2 class="text-center mb-5">Dados dos usuários cadastrados</h2>
				
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">E-mail</th>
								<th scope="col">Nome</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th scope="row"></th>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

				</div>

			</div>

		</div>



		<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>

	</body>
</html> -->