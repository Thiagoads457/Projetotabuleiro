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
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $bairro  = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    if ($nome != "" && $email != "" && $rua != "" && $bairro != "" && $cidade != "" && $cep != "" && $estado != "" && $telefone != "") {
        if (alterarCliente($nome, $email, $rua, $bairro, $cidade, $cep, $estado, $telefone, $_SESSION['id']))
            echo "Registro alterado com sucesso!";
        else
            echo "Erro ao alterar o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
$dados = consultarClienteId($id);
?>
<h3>Alterar Cliente</h3>
<form action="" method="POST">
    <div class="row g-3">
        <div class="col-md-8">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>">
        </div>

    </div>
    <form class="row g-3">
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $dados['email'] ?>">
        </div>

        <div class="col-8">
            <label for="rua" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua, nº" value="<?= $dados['rua'] ?>">
        </div>
        <div class="col-8">
            <label for="bairro" class="form-label"></label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?= $dados['bairro'] ?>">
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade" value="<?= $dados['cidade'] ?>">
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cep" class="form-label"></label>
                <input type="text" class="form-control" name="cep" placeholder="CEP" value="<?= $dados['cep'] ?>">
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label"></label>
                <input type="text" class="form-control" name="estado" placeholder="Estado" value="<?= $dados['estado'] ?>" >
            </div>
            <div class="row">
            <div class="col-md-4">
                <label for="telefone" class="form-label"></label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="CEP" value="<?= $dados['telefone'] ?>" >
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </div>
    </form>
</form>


<?php
require_once("../rodape.html");
