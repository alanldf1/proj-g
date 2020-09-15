<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>landing page</title>
		<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/form.css">
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@453&display=swap" rel="stylesheet">	
		
	</head>
	<body>

		<center>

			<div class="background">

				<img class="img" src="assets/img/shopmee-brand.png"><br>
				<p>Inscreva-se em nossa newsletter e receba semanalmente <b>conteúdo sobre negócios e dicas para aumentar suas vendas.<b></p>

				<form method="POST" action="login.php">
					<div>
						<input type="email" name="email" maxlength="255" placeholder="Comece informando seu melhor E-mail">
					</div><br>
					
					<div>
						<input type="text" name="name" maxlength="255" placeholder="Agora seu nome">
					</div>
					<input type="submit" name="enviar" value="ME INSCREVA" id="btn-cadastro">
					
				</form>

			</div>
			
		</center>

		<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="assets/js/cadastro.js"></script>


	</body>
</html>