<?php
require_once("../cabecalho.php");
?>
<h3>Alterar Cliente</h3>
<form>
    <div class="row g-3">
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" class="form-control">
        </div>

    </div>
    <form class="row g-3">
        <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-8">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Rua, nº">
        </div>
        <div class="col-8">
            <label for="inputAddress2" class="form-label"></label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Bairro">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label"></label>
            <input type="text" class="form-control" id="Cidade" placeholder="Cidade">
        </div>
        <div class="col-md-2">
            <label for="inputState" class="form-label"></label>
            <select id="inputState" class="form-select">
                <option selected>Estado</option>
                <option>SP</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label"></label>
            <input type="text" class="form-control" id="inputZip" placeholder="CEP">
        </div>

        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </div>
    </form>
</form>


<?php
require_once("../rodape.html");
