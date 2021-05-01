<?php
    include "model/Product.php";
    $total = 0;

    function addToTotal($quantity, $price){
        global $total;
        $total += $quantity * $price;
    }

    switch (@$_GET['action']) {
        case 'add':
            $id = @$_GET['itemid'];
            @$_SESSION["cart"][$id] = $_SESSION["cart"][$id] + 1;
            header('Location: ?c=cart');
            break;
        case 'delete':
            $id = @$_GET['itemid'];
            @$_SESSION["cart"][$id] = $_SESSION["cart"][$id] - 1;
            if(@$_SESSION["cart"][$id] <= 0){
                unset($_SESSION["cart"][$id]);
            }
            header('Location: ?c=cart');
            break;
        case 'checkout':
            $cart_products = [];
            if(count(@$_SESSION["cart"])>0){
                $ids = implode(",", array_keys(@$_SESSION["cart"]));
                $cart_products = Product::selectRange($ids);
            }
            include 'view/checkout.php';
            break;
        default:
            $cart_products = [];
            if(count(@$_SESSION["cart"])>0){
                $ids = implode(",", array_keys(@$_SESSION["cart"]));
                $cart_products = Product::selectRange($ids); 
            }
            
            include 'view/cart.php';
    }
    
?>