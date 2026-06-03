<?php

// Inclui o arquivo responsável pela conexão com o banco de dados
include("infra/db/connect.php");

// Verifica se o formulário foi enviado utilizando o método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Pega os valores digitados no formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    // Consulta SQL para verificar se existe um usuário e senha informados
    $sql = "SELECT * FROM usuario
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";

    // Executa a consulta no banco de dados
    $resultado = $conn -> query($sql);

    // Verifica se a consulta retornou pelo menos um registro
    if($resultado -> num_rows > 0){

        // Cria uma variável de sessão para armazenar o usuário logado
        $_SESSION["usuario"] = $usuario;

        // Redireciona o usuário para a página inicial
        header("Location: public/home.php");

        // Encerra a execução do script depois do redirecionamento
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("public/component/navbar.php");
    ?>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>