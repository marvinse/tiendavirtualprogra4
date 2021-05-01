<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <title>TechNoLogic Xstore</title>
    </head>

    <body>
        <?php
            session_start();
            if( !@$_SESSION["cart"] ){
                $_SESSION["cart"] = array();
            }
            if(isset($_GET['c'])){
                $filename = "controller/{$_GET['c']}.php";
                if(file_exists($filename)){
                    include_once $filename;
                }else{
                    include 'view/error.php';
                }
            }else{
                include "controller/home.php";
            }
        ?>
        <script src="js/function.js"></script>
    </body>
    
</html>