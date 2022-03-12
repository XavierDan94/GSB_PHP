<?php
    namespace Xavierdan\GalaxySwissBourdin\Controllers;
    
    class AdminWelcomeController extends Controller {
        public function index(){
            $this->render("AdminWelcome");
        }
    }