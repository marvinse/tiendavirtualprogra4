<div class="container">
    <?php include ('view/partials/navbar.php') ?>
</div>

<!-------- Products List -------->

<div class="small-container">

    <div class="row row-2">
    <?php
        if($_POST){ ?>
            <h2>Related search with: <?php echo $filter ?></h2>
    <?php } ?>
    </div>

    <div class="row">
        <?php foreach ($entries as $product){ ?>
            <div class="col-4">
                <a href="?c=product&id=<?php echo $product->getId() ?>">
                    <div><img src="<?php echo $product->image ?>"></div>
                </a>
                <h4><?php echo $product->name ?></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$<?php echo $product->price ?></p>
                <a href="?c=product&id=<?php echo $product->getId() ?>">Ver producto</a>
            </div>
        <?php } ?>
    </div>

    <!-------- Latest Products -------->
</div>

<!-------- Footer -------->
<?php include ('view/partials/footer.php') ?>
