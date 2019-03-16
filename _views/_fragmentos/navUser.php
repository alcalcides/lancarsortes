<nav class="row btn-group btn-group-lg sticky-top shadow mx-1 mb-3">
    <div class="btn-group">
    	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
           Meus Sorteios
        </button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href=<?php echo $hieAbs . "_views/_users/minhas-participacoes.php"?>>Minhas participações</a>
			<a class="dropdown-item" href=<?php echo $hieAbs . "_views/_users/meus-lancamentos.php"?>>Meus lançamentos</a>
			<a class="dropdown-item" href=<?php echo $hieAbs . "_views/_users/lancar-sorteio.php"?>>Lançar Sorteio</a>
		</div>
	<button type="button" class="btn "><a class="text-decoration-none" target="_self" href=<?php echo $hieAbs . "_views/_users/meu-perfil.php";?>>Meu perfil</a></button>
	<button type="button" class="btn "><a class="text-decoration-none" target="_self" href=<?php echo $hieAbs . "_views/home.php";?>>Sair</a></button>
</nav>	