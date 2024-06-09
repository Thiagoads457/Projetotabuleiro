<?php
require_once("../cabecalho.php");
?>
    <div class="row">
        <div class="col">
            <h3>Gerenciamento de Clientes</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="inserir_cliente.php" <i class="bi bi-plus-circle btn btn-primary mt-3"</i> Clientes </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-responsive table-hover table-striped mt-4">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $linhas = retornarCliente();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <td><?= $l['nome']?></td>
                        <td><?= $l['email']?></td>
                        <td>
                            <a href="alterar_cliente.php?id=<?= $l['id'] ?>" <i class="bi bi-pencil" style="font-size: 20px; color:green"></i></a>
                            <a href="excluir_cliente.php?id=<?= $l['id'] ?>" <i class="bi bi-trash3" style="font-size: 20px; color:red"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    

                </tbody>

            </table>
        </div>
    </div>

<?php
    require_once("../rodape.html");
