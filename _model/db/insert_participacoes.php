<?php
    include 'connection.php';
    $conn = getConnection();
    
    $idsorteios = $_REQUEST["idsorteios"]; 
    $idpessoas = $_REQUEST["idpessoas"]; 
    $compPagto = $_REQUEST["compPagto"];
   
    $sql = "INSERT INTO participacoes (idsorteios, idpessoas, compPagto) VALUES (:idsorteios, :idpessoas, :compPagto)";
    
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':idsorteios', $idsorteios);
    $stmt->bindParam(':idpessoas', $idpessoas);
    $stmt->bindParam(':compPagto', $compPagto);
    
    if($stmt->execute()){
        echo "Participacao garantida<hr>";
    }
    else{
        echo "Não é possível participar<hr>";
    }
?>