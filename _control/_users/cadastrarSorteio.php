<?php    
    require_once '../../_model/fuso.php';
    
    //entradas
    $titulo = addslashes(trim($_REQUEST["nTitulo"]));
    $descricao = addslashes(trim($_REQUEST["nDescricao"]));
    $dia = $_REQUEST["nDia"];
    $horario = $_REQUEST["nHorario"];
    $lugar = addslashes(trim($_REQUEST["nLugar"]));
    $formaRetirada = addslashes(trim($_REQUEST["nFormaRetirada"]));
    $valorParticipacao = trim($_REQUEST["nValor"]);
    $tempoLocal = $_REQUEST["nMomentolocal"];
    unset($_REQUEST);
    
    //título
    if(!preg_match('/^[\s\wÀ-ú]{3,45}$/', $titulo)){
        echo "<script>
            window.alert('Campo \"Título\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    
    //descrição
    if(!preg_match('/^[\s\wÀ-ú]{0,255}$/', $descricao)){
        echo "<script>
            window.alert('Campo \"Descrição\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    
    //preço: sem necessidade de validação
    
    //dia
    if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $dia) || $dia < date('Y-m-d') ){
        echo "<script>
            window.alert('Campo \"Dia\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    
    //horário
    if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $dia) || $dia < date('Y-m-d') ){
        echo "<script>
            window.alert('Campo \"Dia\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    
    //processamento do tempo local
    date_default_timezone_set(timezone);
    $tempoLocal = str_replace('T', ' ', $tempoLocal);
    $tempoLocal = substr($tempoLocal,0,16);
    $tempoSorteio = $dia.' '.$horario;
    
    //validação tempo de cadastro e de sorteio e estado do sorteio
    if($tempoSorteio <= $tempoLocal){
        echo "<script>
            window.alert('A data e horário do sorteio tem que ser posterior a data e horário atuais');
            window.history.go(-1);
            </script>";
        die();
    }
    else{
        $estado = 'OP';
    }
    
    //validação lugar do sorteio
    if(!preg_match('/^[\s\wÀ-ú\-,]{3,45}$/', $lugar)){
        echo "<script>
            window.alert('Campo \"Local do sorteio\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    else{
        $lugar = ucfirst($lugar);
    }
    
    //validação forma de retirada
    if(!preg_match('/^[\s\wÀ-ú\-,\.]{3,45}$/', $formaRetirada)){
        echo "<script>
            window.alert('Campo \"Forma de retirada\" digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }
    else{
        $formaRetirada = ucfirst($formaRetirada);
    }
    
    
    //saídas
    unset($_REQUEST);
    $_REQUEST["titulo"] = $titulo;
    $_REQUEST["descricao"] = $descricao;
    $_REQUEST["valorParticipacao"] = $valorParticipacao;
    $_REQUEST["estado"] = $estado;
    $_REQUEST["momentoSorteio"] = $tempoSorteio;
    $_REQUEST["momentoCadastro"] = $tempoLocal;
    $_REQUEST["lugarSorteio"] = $lugar;
    $_REQUEST["formaRetirada"] = $formaRetirada;  
    
    require '../../_model/db/insert_sorteios.php';
    
    $deucerto = $_REQUEST['inserirSorteio'];
    unset($_REQUEST);
    if($deucerto){
        echo "<script>
            window.alert('Sorteio Cadastrado');
            window.location='../../_views/_users/meus-sorteios-ativos.php';
            </script>";
    }
    else{
        echo "<script>
            window.alert('Sorteio Não Cadastrado');
            window.history.go(-1);
            </script>";
    }
?>