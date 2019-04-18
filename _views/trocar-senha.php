<?php 
    session_start();
    session_unset();
    session_destroy();
    require_once 'hierarquiaArvore.php';
?>
<!DOCTYPE HTML>
<html  lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Trocar Senha | Sorteio Cooperativo</title>
	<?php require_once '_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href="_css/main.css" >
</head>
<body>
	<div class="container-fluid" id="interface">
		<header>
			<?php require $hieAbs.'_views/_fragmentos/tituloPagina.php';
                tituloPagina("Trocar Senha");
			?>
			<?php require $hieAbs.'_views/_fragmentos/menuPrincipal.php';?>
		</header>
		<main>
			<form id="trocarSenha" action=<?php echo $hieAbs."_control/users/possibilitarTrocarSenha.php";?> method="post">
				<div class="form-group">
                    <label for="username">Nome de usuário cadastrado:</label>
                    <input name="nUsername" type="text" class="form-control" id="username" placeholder="Requerido" required>
              	</div>
              	<div class="form-group">
                    <label for="email">Email:</label>
                    <input name="nEmail" type="email" class="form-control" id="email" placeholder="requerido se cadastrado anteriormente">
              	</div>
				<button name="nSubmeter" type="submit" class="btn btn-primary">Submeter</button>		   						
			</form>		
		</main>
		<?php require '_fragmentos/opsLogin.php';?>
		<?php require '_fragmentos/footer.php';?>
	</div>
</body>
</html>