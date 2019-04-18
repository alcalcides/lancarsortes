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
	<title>Cadastre-me | Sorteio Cooperativo</title>
	<?php require_once '_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href="_css/main.css" >
</head>
<body>
	<div class="container-fluid">
		<header>
			<?php require $hieAbs.'_views/_fragmentos/tituloPagina.php';
                tituloPagina("Cadastre-me");
			?>
			<?php require $hieAbs.'_views/_fragmentos/menuPrincipal.php';?>
		</header>		
		<main>				
			<h2>Cadastre-me => logo!</h2>
	   		<form id="cadastrarUsuario" method="post" action=<?php echo $hieAbs . "_control/users/cadastrarUsuario.php";?> >
				<fieldset>
    				<legend>Atente-se ao bom preenchimento.</legend>
    			  	<div class="form-group">
                        <label for="name">Nome completo:</label>
                        <input name="nName" type="text" class="form-control" id="name"  placeholder="Seu nome aqui" autofocus required>
                  	</div>
    			  	<div class="form-group">
                        <label for="username">Nome de usuário:</label>
                        <input name="nUsername" type="text" class="form-control" id="username" placeholder="Uma só palavra" required>
                  	</div>
    			  	<div class="form-group">
                        <label for="email">Email:</label>
                        <input name="nEmail" type="email" class="form-control" id="email" placeholder="seuemail@importante.com.br">
                  	</div>
    			  	<div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input name="nTelefone" type="tel" class="form-control" id="telefone" placeholder="Apenas números aqui">
                  	</div>
    				<div class="form-group">
    					<label for="pwd">Senha:</label>
                        <input name="nSenha" type="password" class="form-control" id="pwd" placeholder="***************" required>
    				</div>
				</fieldset>
          		<button name="nCadastrar" type="submit" class="btn btn-primary">Cadastre-me</button>
            </form>		
		</main>
		<?php require '_fragmentos/opsLogin.php';?>
		<?php require '_fragmentos/footer.php';?>
	</div>
</body>
</html>