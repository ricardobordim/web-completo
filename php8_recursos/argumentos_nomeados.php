<?php
    
    function sendMail($destinatario = "", $cc="", $assunto="", $mensagem=""){
        echo "Destinatários: " . $destinatario . "<br>";
        echo "CC: " . $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
    }

    sendMail('teste@teste.com.br',"tt@teste.com.br", "Argumentos Nomeados","Dmoninando o recurso de argumentos nomeados do php 8");

    echo '<hr>';

    // Usando argumentos nomeados

    sendMail(destinatario: 'teste@teste.com.br',
             cc: "tt@teste.com.br", 
             assunto: "Argumentos Nomeados", 
             mensagem:"Dmoninando o recurso de argumentos nomeados do php 8");



?>
