<?php
    function getConnection(){
        require_once 'configs.php';
        try {
            $conn = new PDO("mysql:host=". hostname.";dbname=".db.";charset=".charset, username, password);
        } 
        catch (PDOException $e) {
            echo "Erro: " . $e->getMessage() . "<hr>";
            $conn = false;
        }
        return $conn;
    }
?>