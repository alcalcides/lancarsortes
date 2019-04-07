<?php
    //entradas
    require_once '../../_model/db/select_meu_id.php';
    unset($_REQUEST);
    $_REQUEST['username'] = $_SESSION['username'];
    $_REQUEST["idpessoa"] = meuid($_SESSION['username']);
    $_REQUEST["idpessoa"] = $_REQUEST['idpessoa'][0][0];
    
    require_once '../../_model/db/select_minhas_participacoes.php';
    $participacao = minhasParticipacoes();
    foreach ($participacao as $row) {
        echo "<tr>";
            echo "<td>" . $row['idsorteios']; echo "</td>";
            echo "<td>" . "Estado"; echo "</td>";
            echo "<td>" . "Título"; echo "</td>";
            echo "<td>" . "Premiado"; echo "</td>";
            echo "<td>" . "Marcação"; echo "</td>";
        echo "</tr>";
    }  
    

?>