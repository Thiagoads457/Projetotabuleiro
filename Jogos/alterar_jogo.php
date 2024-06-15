<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
} else
    $id = $_SESSION['id'];
if ($_POST) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $genero = $_POST['genero'];
    if ($nome != "" && $preco != "" && $genero != "") {
        if (alterarJogo($nome, $preco, $genero, $_SESSION['id']))
            echo "Registro alterado com sucesso!";
        else
            echo "Erro ao alterar o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
$dados = consultarJogoId($id);
?>

<h3><i class="bi bi-arrow-repeat"></i>Alterar Jogos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Jogo" value="<?= $dados['nome'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" value="<?= $dados['preco'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Gênero" value="<?= $dados['genero'] ?>">
        </div>
        


        
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");
