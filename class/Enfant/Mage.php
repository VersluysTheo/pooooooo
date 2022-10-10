<?php 
class Mage extends Aventurier{

    public function __construct()
    {
        $this->atk = rand(20,25);
        $this->vie = rand(55,100);
    }

    public function Firespell($cible){
        $cible->vie = $cible->vie - 10;
    }
}
?>