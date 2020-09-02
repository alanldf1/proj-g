<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap</title>
		<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
	</head>
	<body> 

	<div class="row">
		<div class="col-12">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Clique para ver a mensagem!</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">Este é o modal.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<script type="text/javascript" src="assets/libs/jquery.js"></script>
		<script type="text/javascript" src="assets/libs/popper.min.js"></script>
		<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		
	</body>
</html>