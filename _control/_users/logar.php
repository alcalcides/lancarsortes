<?php
    session_start();
    session_unset(); 
    
    $_SESSION["username"]=$_REQUEST["username"];
    $_SESSION["senhaProposta"]=$_REQUEST["senha"];
    
    require '../../_model/db/conferirSenha.php';
    
    if($_SESSION["senhaProposta"] === $_SESSION["senhaCorreta"]){
        header("location: ../../_views/_users/homeUser.php");
    }
    else {
        echo "<script>alert('Senha Errada');</script>";
        echo "<script>window.history.go(-1);</script>";
    }
?>
    