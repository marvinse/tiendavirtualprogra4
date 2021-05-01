<?php
    include "model/Product.php";
    $products = new Product();
    $entries = $products->select();
    if($_POST){
        $filter = $_POST['search'];
        $entries = $products->select(null, $filter);
    }
    include 'view/search.php';
?>