<html>
	<head>
		<title>Atividade 1 de Web 2</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
				<?php include("../layout/cabecalho.html"); ?>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<?php include("../layout/menu.html") ?>
				</div>
				<div class="col-md-9">
					<form action="../repositorio/SalvarAluno.php" method="POST">
					<div class="row">
					<div class="col">
						<label>Nome: </label><input class="form-control" type="text"  name="nome" id="nomeID" onblur="saidaNome();"/>
					</div>
					<div class = "col">
						<label>Idade: </label><input class="form-control" type="text" name="idade" id="idadeID" onblur="verificaIdade();"/>
					</div>
					</div>
					<div class="row">
					<div class="col">
						<label>CPF: </label><input class="form-control" type="text" name="cpf" id="cpfID" onblur="verificaCPF();"/>
					</div>
					<div class="col">
						<label>RA: </label><input class="form-control" type="text" name="ra" id="raID" onblur="verificaRa();"/>
					</div>
					</div>
						<p id="msgIdade"></p>
						<input class="btn btn-primary" type="submit" value="Salvar" />
					</form>
				</div>
			</div>
			<?php include("../layout/rodape.html"); ?>
		</div>	
	</body>
</html>