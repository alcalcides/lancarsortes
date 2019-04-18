<?php
session_start();
require 'hierarquiaArvore.php';
if(!isset($_SESSION["username"])){
    session_unset();
    session_destroy();
    header("location: " . $hieAbs . "_views/login.php");
}
?>
<!DOCTYPE HTML>
<html  lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Meu perfil | Sorteio Cooperativo</title>
	<?php require_once $hieAbs . '_views/_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href=<?php echo $hieAbs. "_views/_css/main.css";?> >
</head>
<body>
	<div class="container-fluid" id="interface">
		<header>
			<?php require $hieAbs.'_views/_fragmentos/tituloPagina.php';
                tituloPagina("Meu perfil");
			?>
    		<?php require $hieAbs . '_views/_fragmentos/navUser.php'?>
		</header>
		<main>
			
		</main>
		<?php require $hieAbs . '_views/_fragmentos/footer.php';?>
	</div>
</body>
</html>