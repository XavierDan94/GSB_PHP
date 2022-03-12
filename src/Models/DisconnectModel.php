<?php
    namespace Xavierdan\GalaxySwissBourdin\Models;
    
    class DisconnectModel extends MainModel {
        public function signOut(){
            session_destroy();
            header('Location:../public/index.php');
        }
    }