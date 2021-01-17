<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Sistema de Gerenciamento</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="wrapper">
        <div id="formContent">
            <div>
				<img src="https://assets-blog.hostgator.com.br/wp-content/uploads/2018/05/internet-das-coisas-blog-v01-1.png" id="icon" alt="User Icon" />
            </div>
            <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="alert alert-danger mt-3 p-0">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
			<form action="Authentication/login.php" method="POST">
				<input type="text" name="usuario" class="fadeIn second"  placeholder="login">
				<input type="password" name="senha" class="fadeIn third"  placeholder="password">
				<button type="submit">Entrar</button>
			</form>

        </div>
    </div>
</body>

</html>