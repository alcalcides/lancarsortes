<?php
try {
    require_once 'connection.php';
    $conn = getConnection();
    
    $nome = $_REQUEST["nome"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $telefone = $_REQUEST["telefone"];
    $senha = $_REQUEST["senha"];
    
    $sql = "INSERT INTO pessoas (nome, username, email, telefone, senha) VALUES (:nome, :username, :email, :telefone, :senha)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':senha', $senha);
    
    $stmt->execute();
        
    $_REQUEST["inserirUsuario"] = true;
    //echo "Nova pessoa inserida<hr>";

} 
catch (PDOException $e) {
    $_REQUEST["inserirUsuario"] = false;
    echo "Erro no cadastro do usuário!<hr>";
    echo $e->getMessage();
}    
?>