<?php
    include "model/Product.php";
    $products = new Product();
    
    if($_POST){
        $filter = $_POST['search'];
        $entries = $products->select(null, $filter);
    }else{
        $entries = $products->select();
        $top = $products->getLatest()[0];
    }
    include 'view/home.php';
?>