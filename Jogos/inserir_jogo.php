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

        <div class="col">
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Gênero">
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarCliente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['id']}'>{$l['nome']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>

        
    </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>

</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $genero = $_POST['genero'];
    $cliente = $_POST['cliente'];

    if ($nome != "" && $preco != "" && $genero != "" ) {
        if (inserirJogo($nome, $preco, $genero, $cliente))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }

}


require_once("../rodape.html");
