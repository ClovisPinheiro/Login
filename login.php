<?php 
    if ($_server["request_method"] == "post"){
        //verifica as credenciais do usuário (isso é apenas um exemplo simples)
        $username = $_POST["username"];
        $password = $_POST["password"];

        //verifica se as credenciais são validas (exemplo; usuário "admin" e senha "senha")
        if ($username === "admin" && $password === "senha"){
            echo "Login Bem Sucedido!"; //Exibe uma mensagem de sucesso
        } else {
            echo "Credenciais inválidas"; //Exibe uma mensagem de erro
        }
    }
?>