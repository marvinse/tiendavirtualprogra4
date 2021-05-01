<div class="checkout">
    <h2>Checkout Form</h2>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="?c=thanks" method="POST">
                    <div class="row">

                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Alberto Villalobos" >
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="villalobos98@gmail.com" >
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="110 W. 15th San Jose, Costa Rica" >
                            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="8624-8094" >
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span>
                                <img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" />
                                <img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" />
                            </div>

                            <label for="cname">Member's Name</label>
                            <input type="text" id="cname" name="cardname" placeholder="Alberto Villalobos">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2021">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Complete the checkout" class="btn">
                    <a href="?c=products_list" class="btn-return">Return to shopping</a>
                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
                <?php foreach ($cart_products as $product){ ?>
                    <p><?php echo $product->name ?> <span class="price"><?php echo @$_SESSION["cart"][$product->getId()] ?> x $<?php echo $product->price ?></span></p>
                    <?php addToTotal(@$_SESSION["cart"][$product->getId()], $product->price) ?>
                <?php } ?>
                <p>Taxes <span class="price">$35</span></p>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$<?php echo $total + 35?></b></span></p>
            </div>
        </div>
    </div>
</div>
