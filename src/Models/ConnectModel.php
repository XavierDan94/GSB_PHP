<?php
    namespace Xavierdan\GalaxySwissBourdin\Models;
    
    use Xavierdan\GalaxySwissBourdin\App\Database;
    
    class ConnectModel extends MainModel {
        
        public function signIn($username, $password){
            $user = $this->db->query("SELECT login,mdp,prenom,nom FROM Visiteur WHERE login=?",[$username])->fetch();
            $loginDB = $user->login;
            $mdpDB = $user->mdp;
            var_dump($mdpDB);
            if (($loginDB == $username) && ($mdpDB == $password)){
                $_SESSION['login'] = $loginDB;
                $_SESSION['prenom'] = $user->prenom;
                $_SESSION['nom'] = $user->nom;
                header("Location:../admin/index.php");
            } else {
                header("Location:../public/index.php?error");
                session_destroy();
            }
        }
    }