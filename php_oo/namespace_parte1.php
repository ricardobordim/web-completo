<?php

// Para explicação foi criado no mesmo arquivo, mas não deve ser assim.
// A partir desse ponto começa essa divisão do código.
    namespace A;
    class Cliente implements CadastroInterface{
        public $nome = 'Jorge';

        public function __construct(){
            print_r(get_class_methods($this));
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function salvar(){
            echo 'Salvar';
        }
    }
    interface CadastroInterface{
        public function salvar();
    }

    namespace B;
    
    // Implementando com a interface declarada no namespace A
    class Cliente implements \A\CadastroInterface
    {
        public $nome = 'Pedro';
        public function __get($attr)
        {
            return $this->$attr;
        }
        public function salvar(){
            echo 'Salvar';
        }
    }
    interface CadastroInterface
    {
        public function salvar();
    }

    // echo '<hr>';

    echo '<pre>';
        // Dentro do namespace B
        $c =new Cliente();
        print_r($c);
        echo $c->__get('nome');
    echo '</pre>';


    // Para ir para o outro namespace
    // echo '<hr>';
    
    echo '<pre>';

        $d = new \A\Cliente();
        print_r($d);
        echo $d->__get('nome');
    echo '</pre>';
    echo $c->nome . ' e ' . $d->nome;

    ?>
