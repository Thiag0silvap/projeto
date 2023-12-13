<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Tela de Login</title>
	<style>
		#tamanho {
			width: 350px;
			-webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			-moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
		}
	</style>
</head>
<body>
	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
		
		<div style="padding: 10px;">
			<center>
				<img src="imagens/cadeado.png" alt="imagem" style="width: 125px; height: 125px;">
			</center>
			<form action="index1.php" method="post">
				<div class="mb-3">
					<label>Usuário</label>
					<input type="text" class="form-control" name="usuario" placeholder="Usuário" autocomplete="off" required>
				</div>
				
				<div class="mb-3">
					<label>Senha</label>
					<input type="password" class="form-control" name="senha" placeholder="Senha" autocomplete="off" required>
				</div>
				<div style="text-align: right;">
					<button type="submit" class="btn btn-success btn-sm">Entrar</button>
				</div>
			</form>
		</div>
	</div>
	<div style="margin-top: 10px;">
		<center>
			<small>Você não possui cadastro? Clique<a href="cadastro_usuario_externo.php">Aqui</a></small>
		</center>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>