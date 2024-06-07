<?php
require_once("../cabecalho.php");
?>
<h3>Excluir Cliente</h3>
<form>
    <div class="row g-3">
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" class="form-control" disabled>
        </div>

    </div>
    <form class="row g-3">
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" disabled>
        </div>

        <div class="col-8">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Rua, nº" disabled>
        </div>
        <div class="col-8">
            <label for="inputAddress2" class="form-label"></label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Bairro" disabled>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" placeholder="Cidade" disabled>
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select" disabled>
                <option selected>Estado</option>
                <option>SP</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label"></label>
            <input type="text" class="form-control" id="inputZip" placeholder="CEP" disabled>
        </div>

        </div>
        <div class="row">
            <div class="col">
                <p class="mt-4">Deseja realmente Excluir?</p>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </form>
</form>


<?php
require_once("../rodape.html");
