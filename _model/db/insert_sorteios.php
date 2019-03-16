<?php
try {
    require_once 'connection.php';
    $conn = getConnection();
    
    $titulo = $_REQUEST["titulo"];
    $descricao = $_REQUEST["descricao"];
    $valorParticipacao = $_REQUEST["valorParticipacao"];
    $estado = $_REQUEST["estado"];
    $momentoSorteio = $_REQUEST["momentoSorteio"];
    $momentoCadastro = $_REQUEST["momentoCadastro"];
    $lugarSorteio = $_REQUEST["lugarSorteio"];
    $formaRetirada = $_REQUEST["formaRetirada"];
    
    $sql = "INSERT INTO sorteios (titulo, descricao, valorParticipacao, estado, momentoSorteio, momentoCadastro, lugarSorteio, formaRetirada) VALUES (:titulo, :descricao, :valorParticipacao, :estado, :momentoSorteio, :momentoCadastro, :lugarSorteio, :formaRetirada)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':valorParticipacao', $valorParticipacao);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':momentoSorteio', $momentoSorteio);
    $stmt->bindParam(':momentoCadastro', $momentoCadastro);
    $stmt->bindParam(':lugarSorteio', $lugarSorteio);
    $stmt->bindParam(':formaRetirada', $formaRetirada);
    
    $stmt->execute();
    $_REQUEST["inserirSorteio"] = true;
    //echo "Novo sorteio cadastrado<hr>";
    
} 
catch (PDOException $e) {
    $_REQUEST["inserirSorteio"] = false;
    echo "Erro no cadastro de novo sorteio!<hr>";
    echo $e->getMessage();
}
?>