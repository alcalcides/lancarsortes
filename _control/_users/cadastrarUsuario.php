<?php
    //entradas
    $nome = addslashes(trim($_REQUEST["nName"]));
    $username = addslashes(trim($_REQUEST["nUsername"]));
    $email = addslashes(trim($_REQUEST["nEmail"]));
    $telefone = addslashes(trim($_REQUEST["nTelefone"]));
    $senha = addslashes(trim($_REQUEST["nSenha"]));
    
    //name validation
    if(!preg_match('/^[^0-9<>!|@#\$\%¨&\*\(\)\-\_\=\+\`\´\^\~\[\]\'\"\\\{\};,.\?]*$/', $nome)){
        echo "<script>
            window.alert('Nome completo digitado erradamente');
            window.history.go(-1);
            </script>";
        die();
    }

    //username validation
    if(!preg_match('/^(\w){1,15}$/', $username)){
        echo "<script>
            window.alert('Nome de usuario deve ser apenas uma palavra');
            window.history.go(-1);
            </script>";
        die();
    }
    
    //email validation
    $conta = "/^[a-zA-Z0-9\._-]+@";
    $domino = "[a-zA-Z0-9\._-]+.";
    $extensao = "([a-zA-Z]{2,4})$/";
    $pattern = $conta.$domino.$extensao;
    if(!preg_match($pattern, $email) && $email != null){
        echo "<script>
                window.alert('Campo \"Email\" inválido');
                window.history.go(-1);
            </script>";
        die();
    }
    
    //phone number validation
    if(!preg_match('/^(\d){8,15}$/', $telefone)){
        echo "<script>
                window.alert('Campo \"Telefone\" deve ter apenas números');
                window.history.go(-1);
            </script>";
        die();
    }
    
    //password validation
    if(!preg_match('/^[^\s<>\{\}\[\]\(\)]{3,15}$/', $senha)){
        echo "<script>
                window.alert('Campo \"Senha\" incorreto');
                window.history.go(-1);
            </script>";
        die();
    }
    
    //saídas
    unset($_REQUEST);
    $_REQUEST["nome"] = $nome;
    $_REQUEST["username"] = $username;
    $_REQUEST["email"] = $email;
    $_REQUEST["telefone"] = $telefone;
    $_REQUEST["senha"] = $senha;
    
    require '../../_model/db/insert_pessoas.php';
    
    $deucerto = $_REQUEST['inserirUsuario'];
    
    if($deucerto){
        echo "<script>
            window.alert('Pessoa Cadastrada');
            window.location='../../_views/login.php';
            </script>";
    }
    else{
        echo "<script>
            window.alert('Usuário Não Cadastrado');
            window.history.go(-1);
            </script>";
    }
?>    
    