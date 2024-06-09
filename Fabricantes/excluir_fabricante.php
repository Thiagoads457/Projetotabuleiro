<?php
require_once("../cabecalho.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    session_start();
    $_SESSION['id'] = $id;
} 
if ($_POST) {
    $id = $_SESSION['id'];
    if (excluirFabricante($_SESSION['id']))
         header('Location: index.php');        
    else 
        echo "Erro ao excluir o registro!";
    
}
$dados = consultarFabricanteId($id);
?>

<h3>Excluir Fabricante</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Fabricante" value="<?= $dados['nome'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="pais" name="pais" placeholder="País de Origem" value="<?= $dados['nome'] ?>" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano de Fundação" value="<?= $dados['nome'] ?>" disabled>
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
