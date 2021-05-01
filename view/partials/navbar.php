
<div class="navbar">

    <div class="logo">
        <a href="?c=home"><img src="images/brands/Logo.png" width="125px"></a>
    </div>

    <nav>
    
        <ul id="MenuItems">

            <li>
            <form class="search" method="POST" action="?c=search">
                <input type="text" name="search">
                <button type="submit">
                    <img src="images/icons/search.png"> 
                </button>
            </form>
            </li>

            <li><a href="?c=home"><img src="images/icons/home.png"> Home</a></li>
            <li><a href="?c=products_list"><img src="images/icons/buy.png"> Products</a></li>
            <li><a href="?c=login"><img src="images/icons/admin.png"> Admin</a></li>

        </ul>

        <!-- Carrito con contador de Items Agregados -->

        <a href="?c=cart" class="notification">
            <span><img src="images/icons/cart.png"></span>
            <span id="badge" class="badge"></span>
        </a>

    </nav>

    <!-- <a href="?c=cart"><img src="icons/cart.png"></a> -->

    <img src="images/icons/menu.png" class="menu-icon" onclick="menutoggle()">

</div>

