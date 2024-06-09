<?php
require_once("../cabecalho.php");
?>
<h3>Inserir Cliente</h3>
<form action="" method="POST">
    <div class="row g-3">
        <div class="col-md-8">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>

    </div>
    <div class="row g-3">
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="col-8">
            <label for="rua" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua, nº" required>
        </div>
        <div class="col-8">
            <label for="bairro" class="form-label"></label>
            <input type="text" class="form-control" id="cidade" name="bairro" placeholder="Bairro" required>
        </div>
        <div class="col-md-8">
            <label for="cidade" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade" required>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cep" class="form-label"></label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label"></label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
            </div>

            <div class="col-md-8">
                <label for="telefone" class="form-label"></label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
</div>
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
    $telefone = $_POST['telefone'];
    if ($nome != "" && $email != "" && $rua != "" && $bairro != "" && $cidade != "" && $cep != "" && $estado != "" && $telefone != "") {
        if (inserirCliente($nome, $email, $rua, $bairro, $cidade, $cep, $estado, $telefone))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
require_once("../rodape.html");
