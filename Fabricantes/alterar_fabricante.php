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
    $pais = $_POST['pais'];
    $ano = $_POST['ano'];
    if ($nome != "" && $pais != "" && $ano != "") {
        if (alterarFabricante($nome, $pais, $ano, $_SESSION['id']))
            echo "Registro alterado com sucesso!";
        else
            echo "Erro ao alterar o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
$dados = consultarFabricanteId($id);
?>

<h3>Inserir Fabricante</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Fabricante" value="<?= $dados['nome'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="pais" name="pais" placeholder="País de Origem" value="<?= $dados['pais'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano de Fundação" value="<?= $dados['ano'] ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>
<?php


require_once("../rodape.html");
