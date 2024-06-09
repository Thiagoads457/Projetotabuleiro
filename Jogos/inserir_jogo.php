<?php
require_once("../cabecalho.php");
?>

<h3>Inserir Jogos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Jogo">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço">
        </div>
        <div class="col-md-4">
            <select class="form-select" id="genero" name="genero" placeholder="Gênero">
            <option value="" disabled selected hidden>Gênero</option>
                <?php
                $linhas = retornarGenero();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                }
                ?>
            </select>


        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>

</form>
<?php

require_once("../rodape.html");
