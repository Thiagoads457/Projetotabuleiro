<?php
require_once("../cabecalho.php");
?>
<h3>Inserir Cliente</h3>
<form action="" method="POST">
    <div class="row g-3">
        <div class="col">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>SP</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</form>


<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    if ($nome != "" && $descricao != "" && $valor != "" && $categoria != "") {
        if (inserirProduto($nome, $descricao, $valor, $categoria))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro";
    } else {
        echo "Preencha todos os campos!";
    }
}

require_once("../rodape.html");
