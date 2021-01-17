<?php
session_start();
include("../conexao.php");

$id = $_POST['aluno_id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
	
$sql = "UPDATE aluno SET nome = '$nome', data = '$data' WHERE aluno_id = '$id'";
$result = mysqli_query($conexao, $sql);

if(mysqli_insert_id($conexao)) {
    header("Location: ../pags/alterar.php");
}
else {
    header("Location: ../pags/alterar.php");
}

?>