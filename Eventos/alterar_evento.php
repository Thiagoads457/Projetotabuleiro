<?php
require_once("../cabecalho.php");
?>

<h3>Alterar Eventos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Evento" aria-label="Evento">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Data" aria-label="Data">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Local" aria-label="Local">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");