<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conexao.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];

$sql =        "INSERT INTO `biblioteca` ";
$sql = $sql . "(`titulo`, `autor`, `genero`) ";
$sql = $sql . "VALUES ('$titulo','$autor','$genero')";


$inserir = mysqli_query($conexao, $sql);

?>
<html>

<head>
	<meta charset="utf-8">
	<title>Registre o livro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" style="width: 500px;margin-top: 20px">
		<h4>Livro inserido</h4>
	</div>
	<center>
		<a href="biblioteca_inserir.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo livro</a>

	</center>
</body>

</html>