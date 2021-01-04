<?php
class Utilisateur{
    private $user_name;
    private $user_pass;

    public function getNom(){
        return $this->user_name;
    }

    public function __construct($n,$p){    // le __construct permet de déclarer un constructeur pour la classe dans laquelle on est. Ici, on est dans la classe Utilisateur, donc avec
        $this->user_name=$n;               // la ligne  __construct($n,$p) on récupérera les donnés tapé quand on crée un nouvelle utilisateur dans le programme principal (voir création des utilisateur dans cours.php)
        $this->user_pass=$p;               
    }
}
?>