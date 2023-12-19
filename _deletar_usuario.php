<?php
include 'conexao.php';
$id = $_GET['id'];
$deletar = "DELETE FROM usuarios WHERE id_usuario = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: aprovar_usuario.php");
//redirenciona novamente para a pagina de aprovação
