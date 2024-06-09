<?php
require_once("../cabecalho.php");
?>

<h3>Alterar Eventos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Evento" aria-label="Evento" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Data" aria-label="Data" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Local" aria-label="Local" disabled>
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