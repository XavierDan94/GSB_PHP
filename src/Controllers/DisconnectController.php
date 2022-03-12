<?php
    namespace Xavierdan\GalaxySwissBourdin\Controllers;
    
    use Xavierdan\GalaxySwissBourdin\Models\DisconnectModel;
    
    class DisconnectController extends Controller{
        private $disconnectController;
        
        public function __construct(){
            $this->disconnectController = new DisconnectModel();
        }
        
        public function disconnect(){
            $this->disconnectController->signOut();
        }
    }