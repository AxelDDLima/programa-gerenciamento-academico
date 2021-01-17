<?php
session_start();
include("../conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$data = mysqli_real_escape_string($conexao, trim($_POST['data']));

$sql = "select count(*) as total from aluno where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../pags/cadastro.php');
	exit;
}

$sql = "INSERT INTO aluno (`nome`,`data`) VALUES ('$nome','$data')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../pags/index.php');
exit;
?>