<?php
include 'conexao.php';
$codproduto = $_POST["codproduto"];
$nomeproduto = $_POST["nomeproduto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];

$sql = "INSERT INTO `estoque`(`codproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="container" style="width: 400px;">
	<center>
		<h4>Produto adicionado com sucesso</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
			<a href="adicionar_produto.php" role="button" class="btn btn-success btn-sm">Cadastrar novo ítem</a>
		</center>
	</div>
</div>
