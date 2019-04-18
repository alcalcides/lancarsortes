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
	<title>Meus sorteios passivos | Sorteio Cooperativo</title>
	<?php require_once $hieAbs . '_views/_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href=<?php echo $hieAbs. "_views/_css/main.css";?> >
</head>
<body>
	<div class="container-fluid" id="interface">
		<header>
			<?php require $hieAbs.'_views/_fragmentos/tituloPagina.php';
                tituloPagina("Minhas participações"); ?>
    		<?php require $hieAbs . '_views/_fragmentos/navUser.php'?>
		</header>
		<main>
			<h2>Visão Geral</h2>
			
            <table class="table table-striped table-bordered table-hover table-borderless table-sm">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Estado</th>
                        <th>Título</th>
                        <th>Premiado</th>
                        <th>Marcação</th>
                    </tr>
                </thead>
                <tbody>
                   	<?php require $hieAbs . '_control/_users/verParticipacoes.php'?>
                </tbody>
            </table>			
		</main>
		<?php require $hieAbs . '_views/_fragmentos/footer.php';?>
	</div>
</body>
</html>