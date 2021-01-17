<?php
include('../Authentication/verifica_login.php');
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
        <h2>Remoção de Alunos:</h2>
        <form action="../functions/remover.php" method="POST" class="form">
                <div class="form-group">
                    <label for="formGroupExampleInput">Id do aluno a ser excluso:</label>
                    <input type="text" name="aluno_id" class="form-control" id="formGroupExampleInput" placeholder="id do aluno">
                </div>
                <button type="submit" class="btn">Remover</button>
        </form>    
        <h2><a href="../Authentication/logout.php" class="btn btn-info">Sair</a></h2>
    </body>

</html>      