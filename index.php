<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
    <h2 class ="mt-4">Promoção</h2>
    <div class="row mt-5">
        <?php
            foreach ($produtos as $key => $value) {
        ?>

        <div class="card m-3" style="width: 18rem;">
            <img src="<?php echo $value['imagem'];?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['nome'];?></h5>
                <p class="card-text"><?php echo $value['descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $i;?>"class=" btn btn-primary">Comprar</a>
            </div>
        </div>

        <?php
            }
        ?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>