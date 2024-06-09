<?php
require_once("../cabecalho.php");
?>

<h3>Inserir Fabricante</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Fabricante">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="pais" name="pais" placeholder="País de Origem" >
        </div>
        <div class="col">
            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano de Fundação" >
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>
</form>
<?php

if ($_POST) {
    $nome = $_POST['nome'];
    $pais = $_POST['pais'];
    $ano = $_POST['ano'];
    if ($nome != "" && $pais != "" && $ano != "" ) {
        if (inserirFabricante($nome, $pais, $ano))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
require_once("../rodape.html");


