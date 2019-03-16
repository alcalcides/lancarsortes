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
			<h1 class="display-3 text-center">Sorteio <b>Cooperativo!</b> </h1>
			<small class="text-center">Para o Bem de Todos&nbsp;=>&nbsp;Participe!</small>
    		<?php require $hieAbs . '_views/_fragmentos/navUser.php'?>
		</header>
		<main>
			<h1>Minhas participações</h1>
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
                    <tr>
                        <td>7</td>
                        <td>PR</td>
                        <td>filtro de linha sob encomenda</td>
                        <td></td>
                        <td>2019-05-01 00:00:00</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>CC</td>
                        <td>Uma jumenta falante</td>
                        <td>Carinha legal da esquina</td>
                        <td>2019-02-02 14:00:00</td>
                    </tr>
                    <tr>
                </tbody>
            </table>			
		</main>
		<?php require $hieAbs . '_views/_fragmentos/footer.php';?>
	</div>
</body>
</html>