<div class="container">
    <?php include ('view/partials/navbar.php') ?>
</div>
<!-------- Admin Login  -------->

<div class="account-page">
    <div class="container">

        <div class="row">

            <div class="col-2">
                <img src="images/devices/login_PC.png" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">

                    <div class="form-btn">
                        <h2>Admin Login</h2>
                        <img src="images/icons/admin.png">
                    </div>
                    <?php
                        if( isset($msg) ){ ?>
                            <p>Datos incorrectos, intente de nuevo</p>
                    <?php }?>
                    <form action="?c=login" method="POST">

                        <input type="text" name="username" id="username" placeholder="Username">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <br><br><br>
                        <button type="submit" class="btn">Login</button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

<!-------- Footer -------->

<?php include ('view/partials/footer.php') ?>