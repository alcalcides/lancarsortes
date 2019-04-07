<?php
require_once 'connection.php';

function meuid() {
    try {
        $conn = getConnection();
        $sql = "SELECT idpessoas FROM `pessoas` WHERE username = '". $_REQUEST['username']."'";
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