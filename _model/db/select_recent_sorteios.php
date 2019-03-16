<?php
    require 'connection.php';
    
    function ultimosLancamentos() {
        try {
            $conn = getConnection();
            $sql = "SELECT * FROM sorteios WHERE 1 ORDER BY idsorteios ASC LIMIT 6";
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