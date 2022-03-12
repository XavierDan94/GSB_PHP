<?php
    session_start();
    include "../vendor/autoload.php";
    
    use Xavierdan\GalaxySwissBourdin\Controllers\AdminWelcomeController;
    use Xavierdan\GalaxySwissBourdin\Controllers\DisconnectController;
    
    if (!isset($_SESSION['login'])){
        header("Location:../public/index.php");
        die();
    } else if (isset($_GET['disconnect'])){
        (new DisconnectController)->disconnect();
    } else {
        (new AdminWelcomeController)->index();
    }
