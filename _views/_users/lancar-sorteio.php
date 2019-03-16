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
	<title>Lançar sorteio | Sorteio Cooperativo</title>
	<?php require_once $hieAbs . '_views/_fragmentos/bootstrap.php'; echo "\n";?>
	<link rel="stylesheet" type="text/css" href=<?php echo $hieAbs. "_views/_css/main.css";?> >
	<script type="text/javascript">
    	function ajustarFuso(data, offset) {
    	    var milisegundos_com_utc = data.getTime() + (data.getTimezoneOffset() * 60000);
    	    return new Date(milisegundos_com_utc + (3600000 * offset));
	 	}
    	function getLocalMoment(){
    		var moment = new Date();
    		moment = ajustarFuso(moment,-5);//o valor -5 deve ser trocado por uma variável que automatize o fuso do client side
    		document.getElementById("momentoLocal").value = moment.toISOString();;
    	}
	</script>
</head>
<body>
	<div class="container-fluid" id="interface">
		<header>
			<h1 class="display-3 text-center">Sorteio <b>Cooperativo!</b> </h1>
			<small class="text-center">Para o Bem de Todos&nbsp;=>&nbsp;Participe!</small>
    		<?php require $hieAbs . '_views/_fragmentos/navUser.php'?>
		</header>
		<main>
			<h1>Lançar Sorteio</h1>
			<form id="cadastrarSorteio" method="post" action=<?php echo $hieAbs . "_control/_users/cadastrarSorteio.php";?> >
				<fieldset>
    				<legend>Atente-se ao bom preenchimento.</legend>
    			  	<div class="form-group">
                        <label for="titulo">Título:</label>
                        <input name="nTitulo" type="text" class="form-control" id="Titulo"  placeholder="O que será sorteado?" autofocus required>
                  	</div>
                  	<div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <textarea rows="5" cols="51" maxlength="255" name="nDescricao" id="descricao" placeholder="Detalhe as condições de sorteio" class="form-control"></textarea>
                  	</div>
    			  	<div class="form-group">
                        <label for="dia">Quando será o sorteio?</label>
                        <input name="nDia" type="date" class="form-control" id="dia" required>
                  	</div>
    			  	<div class="form-group">
                        <label for="horario">Em que horário?</label>
                        <input name="nHorario" type="time" class="form-control" id="horario" required>
                  	</div>
    			  	<div class="form-group">
                        <label for="lugar">Local da realização do sorteio:</label>
                        <input name="nLugar" type="text" class="form-control" id="lugar" placeholder="Plataforma Sorteio Cooperativo" required>
                  	</div>
    			  	<div class="form-group">
                        <label for="formaRetirada">Forma de entrega:</label>
                        <input name="nFormaRetirada" type="text" class="form-control" id="formaRetirada" placeholder="Encontro marcado" required>
                  	</div>    			  	
    			  	<div class="form-group">
                        <label for="valor">Valor de cada participação:</label>
                        <input name="nValor" id="valor" type="number" min="0" max="998" class="form-control" id="formaRetirada">
                  	</div> 
                  	<input type="hidden" name="nMomentolocal" id="momentoLocal" required>
          		<button name="nCadastrar" type="submit" class="btn btn-primary" onClick="getLocalMoment();">Lançar!</button>
          		<input name="nReset" type="reset" value="Recomeçar" class="btn btn-primary">          		
            </form>	
		</main>
		<?php require $hieAbs . '_views/_fragmentos/footer.php';?>
	</div>
</body>
</html>