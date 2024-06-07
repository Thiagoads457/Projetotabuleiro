<?php
require_once("../cabecalho.php");
?>

<h3><i class="bi bi-arrow-repeat"></i>Alterar Jogos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="Nome do Jogo">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Preço" aria-label="Preço">
        </div>
        <div class="col-md-4">
            
            <select id="inputState" class="form-select">
                <option selected>Gênero</option>
                <option>Aventura</option>
                <option>Mistério</option>
                <option>Magia</option>
                <option>História</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success mt-3">Alterar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");