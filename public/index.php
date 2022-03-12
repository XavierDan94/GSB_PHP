<?php
    session_start();
    include "../vendor/autoload.php";
    
    use Xavierdan\GalaxySwissBourdin\Controllers\ConnectController;
    use Xavierdan\GalaxySwissBourdin\Controllers\WelcomeController;
    
    if (isset($_GET['connect'])){
        if (isset($_POST['login']) && isset($_POST['password'])){
            (new ConnectController())->connect($_POST['login'],$_POST['password']);
        } else {
            header("Location:../public/index.php");
        }
    } else {
        (new WelcomeController)->index();
        session_destroy();
    }
    
    