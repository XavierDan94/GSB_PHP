<?php
    namespace Xavierdan\GalaxySwissBourdin\Controllers;
    
    class Controller {
        public function render(String $class, $variables=[]){
            ob_start();
            extract($variables);
            require_once "../src/Views/$class.php";
            $content = ob_get_clean();
            require_once "../src/Views/template.php";
        }
    }