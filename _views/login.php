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
	<title>Login | Sorteio Cooperativo</title>
	<?php require_once '_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href="_css/main.css" >
</head>
<body>
	<div class="container-fluid">
		<header>
			<h1 class="display-3 text-center">Login</h1>
			<?php require $hieAbs.'_views/_fragmentos/menuPrincipal.php';?>
		</header>		
		<main>	
			<h2>Login => Logo!!!</h2>			
			<form id="logar" action=<?php echo $hieAbs."_control/_users/logar.php";?> method="post">
				<fieldset>
					<legend>Preencha para entrar</legend>
    				<div class="form-group">
    					<label for="username">Username: </label>
    			   		<input  class="form-control" name="username" id="username" type="text" size="15" maxlengh="15" placeholder="nome de usuário" autofocus required>
    			   	</div>
    				<div class="form-group">
    			   		<label for="senha">Senha: </label>
    			   		<input class="form-control" name="senha" id="senha" type="password" size="15" placeholder="****" required>
    			   	</div>
			   	</fieldset>
		   		<button name="nLogar" type="submit" class="btn btn-primary">Login</button>				
			</form>
		</main>
		<?php require '_fragmentos/opsLogin.php';?>
		<?php require '_fragmentos/footer.php';?>
	</div>
</body>
</html>