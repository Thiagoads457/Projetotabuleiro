<?php
require_once("../cabecalho.php");
?>

<h3>Excluir Jogos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="Nome do Jogo" disabled>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Preço" aria-label="Preço" disabled>
        </div>
        <div class="col-md-4">

            <select id="inputState" class="form-select" disabled>
                <option selected>Gênero</option>
                <option>Aventura</option>
                <option>Mistério</option>
                <option>Magia</option>
                <option>História</option>
            </select>
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
