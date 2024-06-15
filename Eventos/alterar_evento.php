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
    $data = $_POST['data'];
    $local = $_POST['local'];
    if ($nome != "" && $data != "" && $local != "") {
        if (alterarEvento($nome, $data, $local, $_SESSION['id']))
            echo "Registro alterado com sucesso!";
        else
            echo "Erro ao alterar o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
$dados = consultarEventoId($id);

?>

<h3>Alterar Eventos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Evento" value="<?= $dados['nome'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="data" name="data" placeholder="Data" value="<?= $dados['data'] ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="local" name="local" placeholder="Local" value="<?= $dados['local'] ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Alterar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");
