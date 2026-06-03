<?php
    session_start();

    // Endereço do servidor do banco de dados
    $host = "localhost";
    // Nome do usuário do banco de dados
    $user = "root";
     // Senha do usuário do banco de dados
    $pass = "root";
    // Nome do banco de dados que será utilizado
    $db = "sistema_simples";
    
    //Cria a conexão com o banco de dados MySQL
    $conn = new mysqli($host,$user,$pass,$db);

    //Verificação da conexão com o banco de dados.
    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>

<!-- Este arquivo serve para conexão com o banco de dados -->