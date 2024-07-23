<?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario ='root' ;
    $senha ='';
    try {
        $conexao = new PDO($dsn,$usuario,$senha);

        // Exec é mais utilizado para Criar tabelas do que para o dia-a-dia.

        $query = 'create table if not exists tb_usuarios(
                        id int not null primary key auto_increment,
                        nome varchar(50) not null,
                        email varchar(50) not null,
                        senha varchar(50) not null)';
        $conexao->exec($query);
        // DDL e Select retornam Zero (0), enquanto Delete e Update o nro de registros.


        // $query = 'insert into tb_usuarios (nome, email, senha) values ("Diogo S. Bordim", "diogos@teste.com.br","123456")';
        // $retorno = $conexao->exec($query);
        // echo $retorno;

/*
        // O método query permite tratar o statement 
        $query = 'select * from tb_usuarios';

        $stmt = $conexao->query($query);
        
        // Para saber o que retorna no stmt
        // print_r($stmt);

        // retonar todos os registros com índices numéricos e associativos
        $lista = $stmt->fetchAll();
        echo '<pre>';
        print_r($lista);

        // Retorna array associativo e numérico
        foreach ($lista as $itens) {
            foreach ($itens as $key => $value) {
                echo "[$key] = $value <br>";
            }
            echo '<hr>';
        }
        echo '</pre>';
*/

        // retonar todos os registro de forma associativa
/*
        $query = 'select * from tb_usuarios';

        $stmt = $conexao->query($query);

        // FETCH_ASSOC ; FETCH_NUM  ; FETCH_BOTH ; FETCH_OBJ
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Retorna array associativo e numérico
        foreach ($lista as $itens) {
            foreach ($itens as $key => $value) {
                echo "[$key] = $value <br>";
            }
            echo '<hr>';
        }
        echo '</pre>';

*/

        $query = 'select * from tb_usuarios';

        foreach ($conexao->query($query) as $key => $value) {
            print_r($value['nome']);
            echo '<hr>';
        }



/*
        $query = 'select * from tb_usuarios order by nome desc limit 1';

        $stmt = $conexao->query($query);

        // Retorna apenas um registro;
        $usuario= $stmt->fetch(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($usuario);
        echo $usuario->nome;
        echo '</pre>';

*/
    }
    catch(PDOException $e){
        echo '<pre>';
        // print_r($e);
        echo 'Erro: ' . $e->getCode(). ' - Mensagem: ' . $e->getMessage();
        echo '</pre>';


    }
?>
