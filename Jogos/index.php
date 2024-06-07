<?php
require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Jogos</h3>

    <a href="inserir_jogo.php" <i class="bi bi-plus-circle btn btn-primary mt-3"</i> Jogos </a>
   
    

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php
                #$linhas = retornarProdutos();
                #while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome']?></td>
                <td><?= $l['genero']?></td>
                <td><?= $l['preco']?></td>
                <td>
                    <a href="alterar_jogo.php" <i class="bi bi-pencil" style="font-size: 20px; color:green"></i></a>
                    <a href="excluir_jogo.php" <i class="bi bi-trash3" style="font-size: 20px; color:red"></i></a>
                </td>
            </tr>
            <?php
                #}
            ?>
            

        </tbody>

    </table>


<?php
    require_once("../rodape.html");