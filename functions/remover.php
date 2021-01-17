
<?php
session_start();
include("../conexao.php");

$aluno_id = mysqli_real_escape_string($conexao, trim($_POST['aluno_id']));

$sql = "select count(*) as total from aluno where aluno_id = '$aluno_id'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 0) {
	header('Location: ../pags/remove.php');
	exit;
}

$sql = "DELETE FROM aluno WHERE aluno_id = '$aluno_id';";

if($conexao->query($sql) === TRUE) {
}

$conexao->close();

header('Location: ../pags/index.php');
exit;
?>