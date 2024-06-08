<?php
require_once("../cabecalho.php");
?>

<h3>Excluir Fabricante</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome do Fabricante" aria-label="Nome do Fabricante">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="País de Origem" aria-label="País de Origem">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Ano de Fundação" aria-label="Ano de Fundação">
        </div>

        <div class="row">
            <div class="col">
                <p class="mt-4">Deseja realmente Excluir?</p>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");