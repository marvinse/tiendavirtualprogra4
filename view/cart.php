
<!-------- Nav-Bar -------->
<div class="container">
    <?php include ('view/partials/navbar.php') ?>
</div>

<!-------- Cart Items Details -------->

<div class="small-container cart-page">

    <table>

        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price&nbsp;</th>
        </tr>

        <h6 class="mb-0">Tu carrito <?php echo count($cart_products) == 0 ? "está vacío" : "" ?></h6>
        <?php foreach ($cart_products as $product){ ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?php echo $product->image ?>">
                        <div>
                            <p><?php echo $product->name ?></p> <br>
                            <small>Price: $<?php echo $product->price ?></small>
                            <br>
                            <a class="modify" href="?c=cart&action=delete&itemid=<?php echo $product->getId() ?>">Remove</a>
                        </div>
                    </div>
                </td>
                <td><?php echo @$_SESSION["cart"][$product->getId()] ?></td>
                <td>$<?php echo $product->price ?></td>
            </tr>
            <?php addToTotal(@$_SESSION["cart"][$product->getId()], $product->price) ?>
        <?php } ?>
    </table>
    <?php if ( count($cart_products) > 0 ){ ?>
        <div class="total-price">

            <table>

                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo $total?></td>
                </tr>

                <tr>
                    <td>Taxes</td>
                    <td>$35</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>$<?php echo $total + 35?></td>
                </tr>

            </table>

        </div>
    <?php }?>

    <a href="?c=products_list"><button class="continue-btn">Continue Shopping</button></a>
    <?php if ( count($cart_products) > 0 ){ ?>
        <a href="?c=cart&action=checkout"><button class="checkout-btn">Proceed to Check-Out</button></a>
    <?php }?>


</div>

<!-------- Footer -------->

<?php include ('view/partials/footer.php') ?>