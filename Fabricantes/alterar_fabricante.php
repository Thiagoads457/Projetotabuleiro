<?php
require_once("../cabecalho.php");
?>

<h3>Alterar Fabricante</h3>
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

        <div class="col-12">
            <button type="submit" class="btn btn-success mt-3">Alterar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");