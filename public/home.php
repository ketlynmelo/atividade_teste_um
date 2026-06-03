<?php
    include("../infra/db/connect.php");

    // Verifica se existe um usuário logado na sessão
    if(!isset($_SESSION["usuario"])){
         // Caso não exista, redireciona para a página de login
        header("Location: ../index.php");
        // Encerra a execução
        exit();
    }

      // Verifica se o formulário foi enviado utilizando o método POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Recebe os dados digitados no formulário
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        // Comando SQL para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario','$senha')";

         // Executa a consulta e verifica se foi realizada com sucesso
        if($conn -> query($sql) === TRUE){

            // Exibe mensagem de sucesso
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            // Exibe mensagem de erro
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        include("../public/component/navbar.php");
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?>
    </p>

    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    
    include("../public/component/table.php");
    ?>


    <a href="logout.php">Sair</a>
    
</body>
</html>