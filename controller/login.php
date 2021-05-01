<?php
    if( @$_GET['action'] == "logout" ){
        unset($_SESSION);
        session_destroy();
        header('Location: /Website');
    }
    if(@$_SESSION["uid"]){
        header('Location: /Website/admin_panel.php');
    }else{
        if($_POST){
            include "model/User.php";
            $user = new User($_POST['username'],md5($_POST['password']) );
            $userFound = $user->login();
            if( $userFound ){
                $_SESSION["username"]=$userFound[0]->username;
                $_SESSION["uid"]=$userFound[0]->getId();
                header('Location: /Website/admin_panel.php');
            }else{
                $msg = "No se encontro el usuario";
                include 'view/login.php';
            }
        }else{
            include 'view/login.php';
        }
    }
?>