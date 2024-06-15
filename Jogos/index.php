<?php
require_once("../cabecalho.php");
?>

<h3>Gerenciamento de Jogos <i class="bi bi-dice-6"></i></h3>

<a href="inserir_jogo.php" <i class="bi bi-plus-circle btn btn-primary mt-3" </i> Jogos </a>

<table class="mt-4 table table-hover table-striped" style="margin-left: -40px;">


    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Gênero</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $linhas = retornarJogo();
        while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['preco'] ?></td>
                <td><?= $l['genero'] ?></td>
                <td>
                    <a href="alterar_jogo.php?id=<?= $l['id'] ?>" <i class="bi bi-pencil" style="font-size: 20px; color:green"></i></a>
                    <a href="excluir_jogo.php?id=<?= $l['id'] ?>" <i class="bi bi-trash3" style="font-size: 20px; color:red"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>


    </tbody>

</table>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../tab.jpg" class="d-block w-100" alt="tab">
        </div>
        <div class="carousel-item">
            <img src="../tab2.jpg" class="d-block w-100" alt="tab">
        </div>
        <div class="carousel-item">
            <img src="../tab3.jpg" class="d-block w-100" alt="tab">
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php
require_once("../rodape.html");
