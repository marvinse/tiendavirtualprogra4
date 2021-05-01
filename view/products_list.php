<!-- NavBar -->
<div class="container">
    <?php include ('view/partials/navbar.php') ?>
</div>

<div class="small-container">

    <div class="row row-2">
        <h2>All Products</h2>
    </div>

    <!-- Product List -->

    <div class="row">
        <?php foreach ($entries as $product){ ?>
            <div class="col-4">
                <a href="?c=product&id=<?php echo $product->getId() ?>">
                <div class="img-container"><img src="<?php echo $product->image ?>"></div>
                    <h4><?php echo $product->name ?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$<?php echo $product->price ?></p>
                    <a href="?c=cart&action=add&itemid=<?php echo $product->getId() ?>"><button id="btn" class="pretty">Add-Cart</button></a>
                </a>
            </div>
        <?php } ?>
    </div>

</div>

<!-------- Footer -------->

<?php include('view/partials/footer.php') ?>