<?php
    include 'connection.php';
    $conn = getConnection();
    
    try {
        $username = $_REQUEST["username"];
        $sql = "SELECT * FROM pessoas WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetchObject();
        $_SESSION["senhaCorreta"] = $result->senha;
    }
    catch (PDOException $e) {
        echo "Erro consulta<br>".$e->getMessage()."<hr>";
    }
?>