<?php
include('../Authentication/verifica_login.php');
include("../conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Gerenciamento</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    </head>

    <body>
        <h2>Bem vindo, <?php echo $_SESSION['usuario'];?>!</h2>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro.php" class="nav-link">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="remove.php" class="nav-link">Remover</a>
                    </li>
                    <li class="nav-item">
                        <a href="alterar.php" class="nav-link">Alterar</a>
                    </li>
                    <li class="nav-item">
                        <a href="buscar.php" class="nav-link">Buscar</a>
                    </li>
                </ul>
            </nav>
        <h2>Buscar informações de Alunos:</h2>
        <form action="" method="POST" class="form">
            <div class="form-group">
                <label for="formGroupExampleInput">Nome:</label>
                <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome">
                <input name="SendPesqUser" type="submit" class="btn mt-3" value="Pesquisar">
            </div>
            <?php
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
        ?>
		</form>
        <h2><a href="../Authentication/logout.php" class="btn btn-info">Sair</a></h2>
    </body>

</html>      
