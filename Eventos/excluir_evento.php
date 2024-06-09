<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
} else
    $id = $_SESSION['id'];
if ($_POST) {
    $id = $_SESSION['id'];
    if (excluirEvento($_SESSION['id']))
        header('Location: index.php');
        else 
            echo "Erro ao excluir o registro!";      
 
}
$dados = consultarEventoId($id);

?>

<h3>Excluir Eventos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Evento" aria-label="Evento" value="<?= $dados['nome'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="data" name="data" placeholder="Data" aria-label="Data" value="<?= $dados['data'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="local" name="local" placeholder="Local" aria-label="Local" value="<?= $dados['local'] ?>" disabled>
        </div>
        <div class="row">
                <div class="col">
                    <p class="mt-4">Deseja realmente Excluir?</p>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
                </div>
            </div>
        
    </div>

</form>
<?php

require_once("../rodape.html");
