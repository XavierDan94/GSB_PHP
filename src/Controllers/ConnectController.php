<?php
    namespace Xavierdan\GalaxySwissBourdin\Controllers;
    use Xavierdan\GalaxySwissBourdin\Models\ConnectModel;
    
    class ConnectController extends Controller{
        private $connectModel;
        
        public function __construct(){
            $this->connectModel = new ConnectModel();
        }
        
        public function connect($username,$password){
            $this->connectModel->signIn($username,$password);
        }
    }
    