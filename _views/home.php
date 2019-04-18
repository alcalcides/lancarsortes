<?php 
    session_start();
    session_unset();
    session_destroy();
    require 'hierarquiaArvore.php';
?>
<!DOCTYPE HTML>
<html  lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Home | Sorteio Cooperativo</title>
	<?php require_once $hieAbs . '_views/_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href="_css/main.css" >
</head>
<body>
	<div class="container-fluid" id="interface">
		<header>
			<?php require_once $hieAbs . '_views/_fragmentos/tituloSite.php';?>
			<?php require_once $hieAbs . '_views/_fragmentos/slogan.php';?>
			<?php require_once $hieAbs.'_views/_fragmentos/menuPrincipal.php';?>
		</header>
		<main>
			<h2>Lançamentos!</h2>
			<div class="card-columns">
				<?php require $hieAbs . '_control/_home/panelLancamentos.php'; ?>
			</div>
		</main>
		<?php require $hieAbs . '_views/_fragmentos/footer.php';?>
	</div>
</body>
</html>