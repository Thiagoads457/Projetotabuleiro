<?php
require_once("../cabecalho.php");
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
}
if ($_POST) {
    $id = $_SESSION['id'];
    if (excluirCliente($_SESSION['id']))
        header('Location: index.php');

    else
        echo "Erro ao excluir o registro!";
}
$dados = consultarClienteId($id);
?>
<h3>Alterar Cliente</h3>
<form action="excluir_cliente.php" method="POST">
    <div class="row g-3">
        <div class="col-md-8">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $dados['nome'] ?>" disabled>
        </div>

    </div>
    <form class="row g-3">
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $dados['email'] ?>" disabled>
        </div>

        <div class="col-8">
            <label for="rua" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua, nº" value="<?= $dados['rua'] ?>" disabled>
        </div>
        <div class="col-8">
            <label for="bairro" class="form-label"></label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $dados['bairro'] ?>" disabled>
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade" value="<?= $dados['cidade'] ?>" disabled>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cep" class="form-label"></label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?= $dados['cep'] ?>" disabled>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label"></label>
                <input type="text" class="form-control" id="estado name="estado" placeholder="Estado" value="<?= $dados['estado'] ?>" disabled>
            </div>
            <div class="row">
            <div class="col-md-4">
                <label for="telefone" class="form-label"></label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="CEP" value="<?= $dados['telefone'] ?>" disabled>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mt-4">Deseja realmente Excluir?</p>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
                </div>
            </div>
    </form>
</form>


<?php
require_once("../rodape.html");
