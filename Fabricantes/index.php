<?php
require_once("../cabecalho.php");
?>

<h3>Gerenciamento de Fabricante <i class="bi bi-dice-6"></i></h3> 

<a href="inserir_fabricante.php" <i class="bi bi-plus-circle btn btn-primary mt-3" </i> Fabricante </a>



<table class="mt-4 table table-hover table-striped">


    <thead>
        <tr>
            <th>Nome</th>
            <th>País de Origem</th>
            <th>Ano de Fundação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $linhas = retornarfabricante();
        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?= $l['nome'] ?></td>
            <td><?= $l['pais'] ?></td>
            <td><?= $l['ano'] ?></td>
            <td>
                <a href="alterar_fabricante.php?id=<?= $l['id'] ?>" <i class="bi bi-pencil" style="font-size: 20px; color:green"></i></a>
                <a href="excluir_fabricante.php?id=<?= $l['id'] ?>" <i class="bi bi-trash3" style="font-size: 20px; color:red"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>


    </tbody>

</table>


<?php
require_once("../rodape.html");