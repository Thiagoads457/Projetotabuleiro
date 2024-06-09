

<?php

    //Função para conexão com o banco de dados
    function conectarBanco(){
        //Instancio o meu objeto PDO que fornece as funções para manipulação dos dados
        $conexao = new PDO("mysql:host=localhost; dbname=BDtabuleiro", "root", "Jl@161215");
        return $conexao;
    }
    /*Para poder alterar ou excluir os produtos, preciso consultar todos os registros do banco de dados
    Utilizo o INNER JOIN para buscar no banco também os dados da categoria, para poder mostrar o nome da categoria 
    para o usuário, não apenas o seu código*/
    function retornarCliente(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT id, nome, email FROM clientes";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a inserção de um produto
    function inserirCliente($nome, $email, $rua, $bairro,$cidade,$cep,$estado){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO clientes (nome, email, rua, bairro, cidade, cep, estado)VALUES (:nome, :email, :rua, :bairro, :cep, :estado)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":rua", $rua);
            $stmt->bindValue(":bairro", $bairro);
            $stmt->bindValue(":cidade", $cidade);
            $stmt->bindValue(":cep", $cep);
            $stmt->bindValue(":estado", $estado);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Para poder alterar ou excluir um registro, precisamos consultar o registro pela sua chave primária (id)
    function consultarClienteId($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM produto WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a alteração de um produto
    function alterarCliente($nome, $descricao, $valor, $categoria, $id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE produto SET nome = :nome, descricao = :descricao, valor = :valor, categoria_id = :categoria WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            $stmt->bindValue(":id", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    //Função que realiza a exclusão de um produto
    function excluirCliente($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM produto WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }







    #INSERT INTO categoria (descricao) VALUES ("Categoria 1"), ("Categoria 2"), ("Categoria 3")

    /*Existe uma relação da tabela categoria com a tabela produto. Portanto, preciso buscar todas as
    categorias do banco de dados para poder relacionar com os registros de produtos na minha aplicação
    A função abaixo faz essa busca e retorna todos os registros de categorias*/
    function retornar(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM categoria";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }