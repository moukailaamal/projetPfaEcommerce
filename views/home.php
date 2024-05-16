<?php
$title = "home";
?>
<?php
?>
<?php ob_start(); ?>

<div class="container">
    <?php foreach ($categories as $categorie) : ?>
        <h3><?= $categorie->name ?></h3>
        <div class="row">
            <?php foreach ($produits as $produit) : ?>
                <?php if ($produit->categorie_id === $categorie->id) : ?>
                    <div class="col-3">
                        <div class="card mb-3 h-100">
                            <a href="index.php?action=indexProduit&id=<?= $produit->id ?>"><img src="<?= $produit->image_path ?>" class="card-img" style="width: 100%; height: 400px" alt="<?= $produit->name ?>"></a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $produit->name ?></h5>
                                <p class="card-text"><?= $produit->description ?></p>
                                <p class="card-text">Prix: <?= $produit->prix ?></p>
                                <p class="card-text">Stock: <?= $produit->stock ?></p>
                                <!--button de panier-->

                                <form action="index.php?action=ajouterPanier" method="POST">
                                    <input type="hidden" name="id" value="<?= $produit->id ?>">
                                    <input type="hidden" name="name" value="<?= $produit->name ?>">
                                    <input type="hidden" name="prix" value="<?= $produit->prix ?>">
                                    <input type="hidden" name="image_path" value="<?= $produit->image_path ?>">

                                    <button type="submit" ><i class="bi bi-cart-fill"></i> Ajouter au panier</button>
                                </form>


                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>