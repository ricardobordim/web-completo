<?php

// print_r($_POST);

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';
    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = "select * from tb_usuarios where ";
        $query .= " email = :usuario ";
        $query .= " and senha = :senha ";

        //   echo($query);

        // O prepare não executa a Query, enquanto o query faz a execução.
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':usuario',$_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);

        $stmt->execute();

        $usuario = $stmt->fetch();

        print_r($usuario);
    
    
    } catch (PDOException $e) {
        echo '<pre>';
        //  print_r($e);
        echo 'Erro: ' . $e->getCode() . ' - Mensagem: ' . $e->getMessage();
        echo '</pre>';
    
    }
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="sql_injection.php">
        <input type="text" placeholder= "Usuário" name="usuario" id=""><br>
        <input type="password" placeholder= "Senha" name="senha" id=""><br>
        <button type="submit">Entrar</button>

    </form>
    
</body>
</html>
