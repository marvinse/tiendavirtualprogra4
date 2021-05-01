<?php include ('view/partials/header.php') ?>

<div class="small-container">

    <!-------- Features Products -------->

    <h2 class="title">Latest Products</h2>

    <div class="row">
        <?php $i = 0; foreach ($entries as $product){ 
            if($i < 4) {?>
            <div class="col-4">
                <a href="?c=product&id=<?php echo $product->getId() ?>">
                    <img src="<?php echo $product->image ?>">
                    <h4><?php echo $product->name ?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$<?php echo $product->price ?></p>
                </a>
            </div>
        <?php } $i++; } ?>
    </div>

</div>



<!-------- Offer -------->

<div class="offer">

    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo $top->image ?>" class="offer-img">
            </div>

            <div class="col-2">
                <p>Exclusively Available on TechNoLogic Xstore</p>
                <h1><?php echo $top->name ?></h1>
                <small><?php echo $top->description ?><br>
                </small>
                <a href="?c=product&id=<?php echo $top->getId() ?>" class="btn">Buy Now &#8594;</a>
            </div>

        </div>
    </div>

</div>

<!-------- testimonial (static content only for design purpose) -------->

<div class="testimonial">
    <div class="small-container">

        <div class="row">

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Excellent Store, they have everything you need and they have an Excellent Service,
                    in my opinion they are the best Store of all..!! </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/users/user-1.png">
                <h3>Valerie Brown</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Amazing Store, they bring you an excellent service and are always for help
                    TechNoLogic Xstore will ever be my favorite Store 100%..!! </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/users/user-2.png">
                <h3>John Smith</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Awesome Store, you can buy anything from your home and they are always on time,
                    They send you the products for free without cost..!! </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="images/users/user-3.png">
                <h3>Elizabeth Parker</h3>
            </div>

        </div>

    </div>
</div>

<!-------- Brands -------->

<div class="brands">
    <div class="small-container">

        <div class="row">

            <div class="col-5">
                <img src="images/brands/apple.png">
            </div>

            <div class="col-5">
                <img src="images/brands/dell.png">
            </div>

            <div class="col-5">
                <img src="images/brands/android.png">
            </div>

            <div class="col-5">
                <img src="images/brands/samsung.png">
            </div>

        </div>

    </div>
</div>

<!-------- Footer -------->

<?php include ('view/partials/footer.php') ?>