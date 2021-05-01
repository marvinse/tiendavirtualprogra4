<div class="container">
    <?php include ('view/partials/navbar.php') ?>
</div>

<!-------- Single Product Details -------->

<div class="small-container single-product">
    <div class="row">

        <div class="col-2">

            <img src="<?php echo $product->image ?>" width="100%" >

        </div>

        <div class="col-2">

            <p>Product</p>
            <h1><?php echo $product->name ?></h1>
            <h4>$<?php echo $product->price ?></h4>
            <a class="btn" href="?c=cart&action=add&itemid=<?php echo $product->getId() ?>">Add to Cart</a>
            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <p><?php echo $product->description ?></p>

        </div>

    </div>
</div>

<!-------- Footer -------->

<?php include ('view/partials/footer.php') ?>