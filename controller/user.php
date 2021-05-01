<?php
    include "model/User.php";

    switch (@$_GET['action']) {
        
        case 'add': 
            if($_POST ){
                $new_user = new User($_POST['username'],$_POST['password']);
                if($new_user->insert()){
                    header('Location: /Website/admin_panel.php');
                }else{
                    $msg ="Error al guardar, intente de nuevo";
                }
            }
            include 'view/create_admin.php';
            break;

        default:
            include '/Website/admin_panel.php';
    }


?>