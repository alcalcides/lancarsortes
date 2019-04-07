<?php
require 'connection.php';

function meusLancamentos() {
    try {
        $conn = getConnection();
        $sql = "SELECT * FROM sorteios WHERE organizador = ". $_REQUEST["idpessoa"];
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