<?php
require_once("../cabecalho.php");
?>

<h3>Gerenciamento de Eventos <i class="bi bi-dice-6"></i></h3> 

<a href="inserir_evento.php" <i class="bi bi-plus-circle btn btn-primary mt-3" </i> Eventos </a>



<table class="mt-4 table table-hover table-striped" style="margin-left: -40px;">


    <thead>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Local</th>
            <th>Cliente</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $linhas = retornarEvento();
        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?= $l['nome'] ?></td>
            <td><?= $l['data'] ?></td>
            <td><?= $l['local'] ?></td>
            <td><?= $l['cliente_id'] ?></td>
            <td>
                <a href="alterar_evento.php?id=<?= $l['id'] ?>" <i class="bi bi-pencil" style="font-size: 20px; color:green"></i></a>
                <a href="excluir_evento.php?id=<?= $l['id'] ?>" <i class="bi bi-trash3" style="font-size: 20px; color:red"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>


    </tbody>

</table>


<?php
require_once("../rodape.html");