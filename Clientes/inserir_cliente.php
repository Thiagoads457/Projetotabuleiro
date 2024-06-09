<?php
require_once("../cabecalho.php");
?>
<h3>Inserir Cliente</h3>
<form action="" method="POST">
    <div class="row g-3">
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" class="form-control">
        </div>

    </div>
    <form class="row g-3">
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="col-8">
            <label for="rua" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="rua" placeholder="Rua, nº">
        </div>
        <div class="col-8">
            <label for="bairro" class="form-label"></label>
            <input type="text" class="form-control" id="cidade" placeholder="Bairro">
        </div>
        <div class="col-md-8">
            <label for="cidade" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" placeholder="Cidade">
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cep" class="form-label"></label>
                <input type="text" class="form-control" placeholder="CEP">
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label"></label>
                <input type="text" class="form-control" placeholder="Estado">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
    </form>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $bairro  = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    if ($nome != "" && $email != "" && $rua != "" && $bairro != "" && $cidade != "" && $cep != "" && $estado != "") {
        if (inserirCliente($nome, $email, $rua, $bairro, $cidade, $cep, $estado))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
require_once("../rodape.html");
