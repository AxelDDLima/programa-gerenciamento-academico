<!-- <?php
session_start();
include("../conexao.php");

    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$sql = "SELECT * FROM aluno WHERE nome LIKE '%$nome%'";
			$result = mysqli_query($conexao, $sql);
			while($row = mysqli_fetch_assoc($result)){
				echo "ID: " . $row['aluno_id'] . "<br>";
				echo "Nome: " . $row['nome'] . "<br>";
				echo "Data: " . $row['data'] . "<br>";
			}
	}
?> -->