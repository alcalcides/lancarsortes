<?php
require_once 'connection.php';

function minhasParticipacoes() {
    try {
        $conn = getConnection();
        $sql = "SELECT * FROM participacoes WHERE idpessoas = ". $_REQUEST["idpessoa"];
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }
    catch (PDOException $e) {
        echo "Erro consulta<br>".$e->getMessage()."<hr>";
        die();
    }
    return $result;
}
?>