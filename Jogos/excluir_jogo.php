<?php
require_once("../cabecalho.php");
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
}
    
if ($_POST) {
    $id = $_SESSION['id'];
    if (excluirJogo($_SESSION['id']))
         header('Location: index.php');
    else
        echo "Erro ao excluir o registro!";
}
$dados = consultarJogoId($id);
?>

<h3><i class="bi bi-arrow-repeat"></i>Exluir Jogos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Jogo" value="<?= $dados['nome'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" value="<?= $dados['preco'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Gênero" value="<?= $dados['genero'] ?>" disabled>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");


