<?php 
class Healer extends Aventurier{

    public function __construct()
    {
        $this->atk = rand(5,10);
        $this->vie = rand(55,100);
    }

    public function Heal($cible){
        $cible->vie = $cible->vie + 20;
    }
}
?>