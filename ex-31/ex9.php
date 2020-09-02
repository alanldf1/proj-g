<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap</title>
		<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
	</head>
	<body> 

		<div class="row">
			<div class="col-3 ml-3 mt-2">
				<button type="button" class="btn btn-success" title="Aqui está o popover" data-toggle="popover" data-placement="bottom">Clique para ver o popover</button>
			</div>
		</div>

		<script type="text/javascript" src="assets/libs/jquery.js"></script>
		<script type="text/javascript" src="assets/libs/popper.min.js"></script>
		<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>
	</body>
</html>