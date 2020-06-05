<?php

    class Cliente {
    // Atributos - variáveis
        var $nome;
        var $idade;
        var $email;
        var $senha;
        var $endereco;

    // Métodos - funções
        function altDados(){
            echo "
                selecione os dados que voce deseja alterar:
                <input type='checkbox'> nome ($this->nome)  
                <input type='checkbox'> idade ($this->idade)
                <input type='checkbox'> email ($this->email)
                <input type='checkbox'> senha ($this->senha)
                <input type='checkbox'> endereço ($this->endereco)
            ";
        }
        function excConta(){
            echo "excluindo conta de $this->nome\n";
            $nome = null;
            $idade = null;
            $email = null;
            $senha = null;
            $endereco = null;
            echo "\nConta excluida com sucesso.\n";
        }
    }

    class Login {
    // atributos
        var $user;
        var $senha;

    // métodos
        function logIn(){
            echo "user:\nsenha:";
        }

        function cadastrar(){
            echo "user:\nsenha:\nconfirmar senha:\nemail:\nendereço:\n";
        }
    }

    class Carrinho {
        // atributos
        var $tamanho;

        // métodos
        function addProduto(){
            echo "produto adicionado";
        }

        function altProduto(){
            echo "produto alterado";
        }

        function excProduto(){
            echo "produto excluído";
        }
    }

    class Pedido {
        var $num;

        function finalizaPedido(){
            echo "finalizar pedido e seguir para pagamento?";
        }
        function geraCod(){
            $num = md5(uniqid(rand(), true));;
            echo "código de pedido: $num\n";
            return $num;
        }
        function buscaPedido($cod){
            $todos = array();
            $x = in_array($todos,$cod);
            return $x;
        }
    }

?>
