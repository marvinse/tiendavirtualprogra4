<?php
include "model/Product.php";
$products = new Product();
$entries = $products->select();

include "view/products_list.php";
