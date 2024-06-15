<?php
require_once("../cabecalho.php");
?>

<h3>Inserir Eventos</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" >
        </div>
        <div class="col">
            <input type="text" class="form-control" id="data" name="data" placeholder="Data" >
        </div>
        <div class="col">
            <input type="text" class="form-control" id="local" name="local" placeholder="Local" >
        </div>
        

        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </div>

</form>
<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $local = $_POST['local'];
    

    if ($nome != "" &&$data != "" &&$local != "" ) {
        if (inserirEvento($nome, $data, $local, $cidade))
            echo "Registro inserido com sucesso!";
        else
            echo "Erro ao inserir o registro!";
    } else {
        echo "Preencha todos os campos!";
    }
}
require_once("../rodape.html");
