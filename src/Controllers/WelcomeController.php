<?php
    namespace Xavierdan\GalaxySwissBourdin\Controllers;
    use Xavierdan\GalaxySwissBourdin\Models\WelcomeModel;

    class WelcomeController extends Controller {
        private $welcomeModel;
        
        public function __construct(){
            $this->welcomeModel = new WelcomeModel();
        }
        
        public function index(){
            $this->render('Welcome',[get_class($this)]);
        }
    }